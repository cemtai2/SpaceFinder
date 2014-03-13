<?php
//This function lists previews of all database entries.  Not sure why the dbConnect function isn't being used.  Need to fix. 
function lists() {

   //mysql_connect("localhost", "kendramo_spf", "DbmHvhw3")
            mysql_connect("localhost","root","")
            or die(mysql_error());

    //mysql_select_db("kendramo_spacefinder")
            mysql_select_db("kendramo_spacefinder") 
            or die(mysql_error());

    $data = mysql_query('SELECT priKey, street, city, rating 
												FROM space
												ORDER BY rating') or die(mysql_error());

    echo "<h2>Address:</h2>",
    "<ul class='addressList'>";
    while ($info = mysql_fetch_array($data)) {
        $priKey = $info['priKey'];
        echo "<li><a href='view.php?priKey=", urlencode($priKey), "'>", $info['street'], " ", $info['city'], "</a></li>";
    }
    echo "</ul>";

    //unset($data, $info, $priKey);
}

?>