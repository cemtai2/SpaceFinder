<?php 
// Outputs previews for all listings, calls the lists function located at /includes/functions/listsF.php
include('includes/sections/header.php');
echo "<div id='contentDiv'>";
lists();
echo "</div>";
include('includes/sections/footer.php');
?>