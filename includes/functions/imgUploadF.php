<?php
function imgUpload()
{
	echo "
<link rel='stylesheet' href='uploader/ui/css/smoothness/jquery-ui-1.10.3.custom.min.css' type='text/css' />
<link rel='stylesheet' href='uploader/assets/jquery.ui.plupload/css/jquery.ui.plupload.css' type='text/css' />
<script src='uploader/ui/js/jquery.js'></script>
<script type='text/javascript' src='uploader/ui/js/jquery-ui-1.10.3.custom.min.js'></script>
<script type='text/javascript' src='uploader/assets/plupload.full.min.js'></script>
<script type='text/javascript' src='uploader/assets/jquery.ui.plupload/jquery.ui.plupload.js'></script>

<?php include('includes/uploader/config.php');?>
	<div id='uploader'>
		<p>Your browser doesn't have Flash, Silverlight or HTML5 support.</p>
	</div>
    
<script type='text/javascript'>
// Initialize the widget when the DOM is ready
$(function() {
	$('#uploader').plupload({
		// General settings
		runtimes : 'html5,flash,silverlight,html4',
		url : '<?php echo UPLOAD_FILE_URL;?>',
		max_file_count: <?php echo MAX_FILE_COUNT;?>,
		chunk_size: '1mb',
		filters : {
			// Maximum file size
			max_file_size : '<?php echo MAX_FILE_SIZE;?>',
			// Specify what files to browse for
			mime_types: [
				{title : 'Supported Extensions', extensions : '<?php echo UPLOAD_SUPPORT_EXT;?>'},
			]
		},
		// Sort files
		sortable: true,
		// Enable ability to drag'n'drop files onto the widget (currently only HTML5 supports that)
		dragdrop: true,
		// Views to activate
		views: {
			list: true,
			thumbs: true, // Show thumbs
			active: '<?php echo UPLOAD_VISIBILITY;?>'
		},
		// Flash settings
		flash_swf_url : 'uploader/js/Moxie.swf',
		silverlight_xap_url : 'uploader/js/Moxie.xap'
	});

	
});
</script>

<!--ENDS HERE--> ";
}
?>