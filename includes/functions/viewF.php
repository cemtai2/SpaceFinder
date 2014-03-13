<?php
//This function outputs all data on a single entry.  Was functioning in v.01, but hasn't been tested since.  Probably won't work. 
function viewPage($info) {
    $priKey = $_GET['priKey'];
    echo "	
	<div class='contentDiv'>	
		<h2>", $info['street'], " ", $info['city'], " <a href='edit.php?priKey=", urlencode($priKey), "'>Edit</a></h2> 
		
		<div class='bSec price'>
			Price: $", number_format($info['price']), "
		</div>
		
		<div class='bSec levels'>
			Levels: ", $info['levels'], "
		</div>
		
		<div class='bSec beds'>
			Beds: ", $info['beds'], "
		</div>
		
		<div class='bSec baths'>
			Baths: ", $info['baths'], "
		</div>
		
		<div class='bSec rooms'>
			Rooms: ", $info['rooms'], "
		</div>
		
		<div class='bSec basement'>
			Basement: ", $info['basement'], "
		</div>
		
		<div class='bSec sqftTotal'>
		  Total Sqft: ", $info['sqftTotal'], "
		</div>
		
		<div class='bSec sqftFin'>
			Finished Sqft: ", $info['sqftFin'], "
		</div>
		
		<div class='bSec sqftUnFin'>
			Unfinished Sqft: ", $info['sqftUnFin'], "
		</div>
		
		<div class='bSec distance'>
			Distance: ", $info['distance'], "
		</div>
		
		<div class='bSec propTax'>
			PropTax: ", $info['propTax'], "
		</div>
		
		<div class='bSec age'>
			Age: ", $info['age'], "
		</div>
		
		<div class='bSec lot'>
			Lot: ", $info['lot'], "
		</div>
		
		<div class='bSec ha'>
			Homeowners Association: ", $info['ha'], "
		</div>
		
		<div class='bSec fence'>
			Fence: ", $info['fence'], "
		</div>
		
		<div class='bSec cooling'>
			Cooling: ", $info['cooling'], "
		</div>
		
		<div class='bSec dishwasher'>
			Dishwasher: ", $info['dishwasher'], "
		</div>
		
		<div class='bSec fridge'>
			Fridge: ", $info['fridge'], "			
		</div>
		
		<div class='bSec oven'>
			Oven: ", $info['oven'], "
		</div>
		
		<div class='bSec disposal'>
			Disposal: ", $info['disposal'], "
		</div>
		
		<div class='bSec microwave'>
			Microwave: ", $info['microwave'], "
		</div>
		
		<div class='bSec ha_fee'>
			Homeowners Association Fee: ", $info['ha_fee'], "
		</div>
		
		<div class='bSec fireplace'>
			Fireplaces: ", $info['fireplace'], "
		</div>
		
		<div class='bSec garageSize'>
		Garage Size: ", $info['garageSize'], "
		</div>
		
		<div class='bSec breakfastBar'>
			Breakfast Bar: ", $info['breakfastBar'], "
		</div>
		
		<div class='bSec washer'>
			Washer: ", $info['washer'], "
		</div>
		
		<div class='bSec dryer'>
			Dryer: ", $info['dryer'], "
		</div>
		
		<div class='bSec heat'>
			Heating: ", $info['heat'], "
		</div>
		
		<div class='bSec laundry'>
			Laundry Room: ", $info['laundry'], "
		</div>
		
		<div class='bSec pool'>
			Pool: ", $info['pool'], "
		</div>
		
		<div class='bSec gradeschool'>
			Gradeschool: ", $info['gradeschool'], "
		</div>
		
		<div class='bSec midschool'>
			Middleschool: ", $info['midschool'], "
		</div>
		
		<div class='bSec highschool'>
			Highschool: ", $info['highschool'], "
		</div>
		
		<div class='bSec oRange'>
			Range: ", $info['oRange'], "
		</div>
		
		<div class='bSec typeKitchen'>
			Type of Kitchen: ", $info['typeKitchen'], "
		</div>
		
		<div class='bSec kitchenFloor'>
			Kitchen Floor: ", $info['kitchenFloor'], "
		</div>
		
		<div class='bSec kitchenCabinets'>
			Kitchen Cabinets: ", $info['kitchenCabinets'], "
		</div>
			
		<div class='bSec kitchenSink'>
			Kitchen Sink: ", $info['kitchenSink'], "
		</div>
		
		<div class='bSec bathFloor'>
			Bathroom Floor: ", $info['bathFloor'], "
		</div>
		
		<div class='bSec bathCounter'>
			Bathroom Vanity: ", $info['bathCounter'], "
		</div>
		
		<div class='bSec showerStall'>
			Shower Stall: ", $info['showerStall'], "
		</div>
		
		<div class='bSec basementFloor'>
			Basement Floor: ", $info['basementFloor'], "
		</div>
		
		<div class='bSec basementWalls'>
			Basement Walls: ", $info['basementWalls'], "
		</div>
		
		<div class='bSec familyFloor'>
			Family Room Floor: ", $info['familyFloor'], "
		</div>
		
		<div class='bSec bedFloor'>
			Bedroom Floor: ", $info['bedFloor'], "
		</div>
		
		<div class='bSec fenceType'>
			Fence Type: ", $info['fenceType'], "
		</div>
		
		<div class='bSec daysOnMarket'>
			Days on the Market: ", $info['daysOnMarket'], "
		</div>
		
		<div class='bSec rating'>
			Rating: ", $info['rating'], "
		</div>
		
		<div class='bSec kitchenCounter'>
			Kitchen Counters: ", $info['kitchenCounter'], "
		</div>
		
		<div class='clearfix'>
		</div>
		
		";

    echo "
		<!-- IMAGE GALLERY GOES HERE 
		all the files that are displayed via the loop below need to be in the 
		image gallery.  Only place they should be displayed is here. -->
		";
    /** 	$dir = 'images/uploads/' . $_GET['priKey'];

      $directory = $dir;

      $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

      while($it->valid())
      {
      if(!$it->isDot())
      {
      echo '<img src="', $it->key(), '" /><br />';
      }

      $it->next();
      }
     * */
    ?>



    <?php
    echo "</div>
	";
}
