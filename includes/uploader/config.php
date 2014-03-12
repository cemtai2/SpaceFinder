<?php
//Hezecom Multiple Files and Images Uploads Config

//Database Connection
define('LOCALHOST','localhost');
define('DB_USERNAME','kendramo_spf');
define('DB_PASSWORD','DbmHvhw3');
define('DB_NAME','kendramo_spacefinder');
define('DB_TYPE','mysql');

//upload handling file path
define('UPLOAD_FILE_URL','http://127.0.0.1/SpaceFinder/includes/uploader/upload.php');

//General Settings

//Specify what files to browse for
define('UPLOAD_SUPPORT_EXT','jpg,gif,png,zip,pdf,doc,docx'); //Files Extensions
define('FILE_RENAME',true); //File Rename-file with random number  (true or false)
define('MAX_FILE_COUNT',20); // Number of files user can upload at a go (sets multiple_queues to false for unlimited) 
define('MAX_FILE_SIZE','10mb'); // Maximum file size in MB

//support jquery ui only
define('UPLOAD_VISIBILITY','thumbs'); //thumbs or list (this is active state)

//Upload Directory
define('UPLOAD_PATH','../../images/uploads');
define('UPLOAD_PATH_THUMB','../../images/uploads/thumbs/');

//Upload Size
define('BIG_IMAGE_WIDTH','500');
define('THUMB_IMAGE_WIDTH','100');



?>