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

			"<div class='list'>
				<div class='img'>
					<a href='/SpaceFinder/view.php?priKey=", urlencode($info['priKey']) ,"'>
						<img src='images/uploads/1/testimg.png' />
					</a>
				</div>
				
				<div class='mid'>
					<div class='address'>
						<span>", $info['street'], "</span>
						<span> ", $info['city'], "</span>					
					</div>

					<div class='container'>
							<span>Rooms ", $info['rooms'], "</span>
							<span>Beds ", $info['beds'], "</span>,
							<span>Baths ", $info['baths'], "</span>,
							<span>Distance ", $info['distance'], "</span>
					</div>
					
					<div class='container'>
						<span>Total Sqft ", $info['sqftTotal'], "</span> 
						<span>Total Fin Sqft ", $info['sqftFin'], "</span> 
						<span>Price ", $info['price'], "</span>
					</div>
				</div>
				
				<div class='rate'>",
					round($info['rating'], 1),
				"</div>
			</div>";
/*			"<div class='list'>",
				"<a href='/SpaceFinder/view.php?priKey=", urlencode($info['priKey']) ,"'>",
					"<img src='images/uploads/1/testimg.png' />",

				"<div class='cont'>",
					"<div class='address'>",
						"<span>", $info['street'], "</span>",
						"<span> ", $info['city'], "</span>",						
					"</div>",
					"<div class='container'>",
						"<span>Rooms ", $info['rooms'], "</span>",
						"<span>Beds ", $info['beds'], "</span>",
						"<span>Baths ", $info['baths'], "</span>",
						"<span>Distance ", $info['distance'], "</span>",
					"</div>",
					
					"<div class='container'>",
						"<span>Total Sqft ", $info['sqftTotal'], "</span>", 
						"<span>Total Fin Sqft ", $info['sqftFin'], "</span>", 
						"<span>Price ", $info['price'], "</span>", 
					"</span>",
				"</div>",
				
				"<span class='rate'>",
					round($info['rating'], 1),
				"</span>",
				"</a>",
			"</div>";
			*/
    }
}

?>