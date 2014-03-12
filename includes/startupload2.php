<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<title> Multitple Files, Images Uploader and Resizer</title>


</head>
<body>
<div style="width:1000px; font: 13px arial;">
<h3> Multitple Files, Images Uploader and Resizer</h3>

<!--COPY AND PASTE TO YOUR PROJECT-->
<link rel="stylesheet" href="uploader/assets/jquery.plupload.queue/css/jquery.plupload.queue.css" type="text/css" />
<script src="uploader/ui/js/jquery.js"></script>
<script type="text/javascript" src="uploader/assets/plupload.full.min.js"></script>
<script type="text/javascript" src="uploader/assets/jquery.plupload.queue/jquery.plupload.queue.js"></script>

<?php include('uploader/config.php');?>
	<div id="uploader">
		<p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
	</div>
    
<script type="text/javascript">
$(function() {
	
	// Setup html5 version
	$("#uploader").pluploadQueue({
		// General settings
		runtimes : 'html5,flash,silverlight,html4',
		url : '<?php echo UPLOAD_FILE_URL;?>',
		max_file_count: <?php echo MAX_FILE_COUNT;?>,
		chunk_size: '1mb',
		dragdrop: true,
		
		filters : {
			// Maximum file size
			max_file_size : '<?php echo MAX_FILE_SIZE;?>',
			// Specify what files to browse for
			mime_types: [
				{title : "Supported Extensions", extensions : "<?php echo UPLOAD_SUPPORT_EXT;?>"},
			]
		},

		flash_swf_url : 'uploader/js/Moxie.swf',
		silverlight_xap_url : 'uploader/js/Moxie.xap'
	});

});
</script>

<!--ENDS HERE-->

</div>
</body>
</html>
