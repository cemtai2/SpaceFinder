<?php

include('includes/sections/header.php');

//mysql_connect("localhost", "kendramo_spf", "DbmHvhw3")
mysql_connect("localhost","root","")
        or die(mysql_error());

//mysql_select_db("kendramo_spacefinder")
mysql_select_db("kendramo_spacefinder") 
        or die(mysql_error());

if (isset($_GET['priKey'])) {
    $priKey = $_GET['priKey'];

    $data = mysql_query("SELECT * FROM space WHERE priKey = '" . $priKey . "'") or die(mysql_error());

    echo "<h3>View Listing</h3>";

    $info = mysql_fetch_array($data);

    viewPage($info);
}

include('includes/sections/footer.php');

//unset($priKey, $data, $info);
?>