<?php
 
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include('config.php');
include('image_control_class.php');

// 5 minutes execution time
@set_time_limit(5 * 60);
$cleanupTargetDir = true; 
$maxFileAge = 5 * 3600; 
	
if (!file_exists(UPLOAD_PATH)) {
	@mkdir(UPLOAD_PATH);
}
if (isset($_REQUEST["name"])) {
	$fileName = $_REQUEST["name"];
} elseif (!empty($_FILES)) {
	$fileName = $_FILES["file"]["name"];
} else {
	$fileName = uniqid("file_");
}
if(FILE_RENAME==true){
$fileExt = substr($fileName, strrpos($fileName, '.'));
$mianext=substr($fileExt,1);
$fileName = substr(rand(0,999999999999999),2,6).substr(time(),6).'.'.$mianext;
}

$filePath = UPLOAD_PATH . DIRECTORY_SEPARATOR . $fileName;
$chunk = isset($_REQUEST["chunk"]) ? intval($_REQUEST["chunk"]) : 0;
$chunks = isset($_REQUEST["chunks"]) ? intval($_REQUEST["chunks"]) : 0;

// Remove old temp files	
if ($cleanupTargetDir) {
	if (!is_dir(UPLOAD_PATH) || !$dir = opendir(UPLOAD_PATH)) {
		die('{"jsonrpc" : "2.0", "error" : {"code": 100, "message": "Failed to open temp directory."}, "id" : "id"}');
	}

	while (($file = readdir($dir)) !== false) {
		$tmpfilePath = UPLOAD_PATH . DIRECTORY_SEPARATOR . $file;

		// If temp file is current file proceed to the next
		if ($tmpfilePath == "{$filePath}.part") {
			continue;
		}
		if (preg_match('/\.part$/', $file) && (filemtime($tmpfilePath) < time() - $maxFileAge)) {
			@unlink($tmpfilePath);
		}
	}
	closedir($dir);
}	

if (!$out = @fopen("{$filePath}.part", $chunks ? "ab" : "wb")) {
	die('{"jsonrpc" : "2.0", "error" : {"code": 102, "message": "Failed to open output stream."}, "id" : "id"}');
}

if (!empty($_FILES)) {
	if ($_FILES["file"]["error"] || !is_uploaded_file($_FILES["file"]["tmp_name"])) {
		die('{"jsonrpc" : "2.0", "error" : {"code": 103, "message": "Failed to move uploaded file."}, "id" : "id"}');
	}

	// Read binary input stream and append it to temp file
	if (!$in = @fopen($_FILES["file"]["tmp_name"], "rb")) {
		die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
	}
} else {	
	if (!$in = @fopen("php://input", "rb")) {
		die('{"jsonrpc" : "2.0", "error" : {"code": 101, "message": "Failed to open input stream."}, "id" : "id"}');
	}
}

while ($buff = fread($in, 4096)) {
	fwrite($out, $buff);
}

@fclose($out);
@fclose($in);

if (!$chunks || $chunk == $chunks - 1) {
	rename("{$filePath}.part", $filePath);
	
	$hezeimage = new Hezeresizer(UPLOAD_PATH .'/'.$fileName);
	$hezeimage->ResizeImageTo(THUMB_IMAGE_WIDTH, THUMB_IMAGE_WIDTH, 'crop');
	$hezeimage->SaveImageTo(UPLOAD_PATH_THUMB.$fileName,90);
	$hezeimage->ResizeImageTo(BIG_IMAGE_WIDTH, BIG_IMAGE_WIDTH, 'resize');
	$hezeimage->SaveImageTo(UPLOAD_PATH .'/'.$fileName,90);
	
	//conect to database
	$db= new PDO("".DB_TYPE.":host=".LOCALHOST.";dbname=".DB_NAME."", DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//insert file name to table
	
	$query 	= $db->prepare("INSERT INTO `uploads` (`upload_name`, `upload_date`) VALUES (?, ?) ");
	$query->bindValue(1, $fileName);
	$query->bindValue(2, date('Y-m-d'));
	try{
		$query->execute();
		}catch(PDOException $e){
	die($e->getMessage());
		}	
}

die('{"jsonrpc" : "2.0", "result" : null, "id" : "id"}');
