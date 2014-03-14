<?php
//This function lists previews of all database entries.  Not sure why the dbConnect function isn't being used.  Need to fix.
function lists() {

   //mysql_connect("localhost", "kendramo_spf", "DbmHvhw3")
   mysql_connect("localhost","root","")
     or die(mysql_error());

    //mysql_select_db("kendramo_spacefinder")
    mysql_select_db("kendramo_spacefinder") 
      or die(mysql_error());

    $data = mysql_query('SELECT priKey, street, city, rating, rooms, beds, baths, sqftTotal, sqftFin, price, distance 
												FROM space
												ORDER BY rating DESC') or die(mysql_error());
    while ($info = mysql_fetch_array($data)) 
		{
			$priKey = $info['priKey'];
			echo 
			"<div class='list'>",
				"<a href='/SpaceFinder/view.php?priKey=", urlencode($info['priKey']) ,"'>",
					"<img src='images/uploads/1/testimg.png' />",

				"<span class='cont'>",
					"<span class='address'>",
						"<span>", $info['street'], "</span>",
						"<span> ", $info['city'], "</span>",						
					"</span>",
					
					"<span class='container'>",
						"Rooms ", $info['rooms'],
						"Beds ", $info['beds'],
						"Baths ", $info['baths'],
						"Distance ", $info['distance'],
					"</span>",
					
					"<span class='container'>",
						"<span>Total Sqft ", $info['sqftTotal'], "</span>", 
						"<span>Total Fin Sqft ", $info['sqftFin'], "</span>", 
						"<span>Price ", $info['price'], "</span>", 
					"</span>",
				"</span>",
				
				"<span class='rate'>",
					round($info['rating'], 1),
				"</span>",
				"</a>",
			"</div>";
			
    }
}

?>