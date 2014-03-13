<?php
// This function processes the form, storing the info in the database, calling the rating function, and saving images to the server. 
function processForm($process, $priKey = "")
{
			$street = $_POST['street']; $city = $_POST['city'];  $sqftTotal = $_POST['sqftTotal']; $sqftFin = $_POST['sqftFin']; $sqftUnFin = $_POST['sqftUnFin']; $lot = $_POST['lot']; $levels = $_POST['levels']; $age = $_POST['age']; $price = $_POST['price']; $rooms = $_POST['rooms'];  $beds = $_POST['beds']; $baths = $_POST['baths']; $garageSize = $_POST['garageSize']; $basement = $_POST['basement']; $basementFloor = $_POST['basementFloor']; $typeKitchen = $_POST['typeKitchen']; $kitchenFloor = $_POST['kitchenFloor']; $kitchenCounter = $_POST['kitchenCounter']; $kitchenCabinets = $_POST['kitchenCabinets']; $bathFloorA = $_POST['bathFloorA']; $bathCounterA = $_POST['bathCounterA']; $showerStallA = $_POST['showerStallA']; 			$bathStorageA = $_POST['bathStorageA']; $bathFloorB = $_POST['bathFloorB']; $bathCounterB = $_POST['bathCounterB']; $showerStallB = $_POST['showerStallB']; $bathStorageB = $_POST['bathStorageB']; 			$mBedFloor = $_POST['mBedFloor']; $mBedCloset = $_POST['mBedCloset']; $bedFloor = $_POST['bedFloor']; $bedCloset = $_POST['bedCloset']; $mBathFloor = $_POST['mBathFloor']; $mBathLinen = $_POST['mBathLinen']; $hallOne = $_POST['hallOne']; $hallTwo = $_POST['hallTwo']; $hallThree = $_POST['hallThree']; $hallFour = $_POST['hallFour']; $fenceType = $_POST['fenceType']; $lRoom = $_POST['lRoom']; $lStorage = $_POST['lStorage']; $lLevel = $_POST['lLevel']; $cabSpace = $_POST['cabSpace']; $pantry = $_POST['pantry']; $den = $_POST['den']; $rec = $_POST['rec']; $sun = $_POST['sun']; $mud = $_POST['mud']; $office = $_POST['office']; $fireplace = $_POST['fireplace']; $fridge = $_POST['fridge']; $oven = $_POST['oven']; $oRange = $_POST['oRange']; $disposal = $_POST['disposal']; $dishwasher = $_POST['dishwasher']; $breakfastBar = $_POST['breakfastBar']; $microwave = $_POST['microwave']; $washer = $_POST['washer']; $dryer = $_POST['dryer']; $pool = $_POST['pool']; $hTub = $_POST['hTub']; $deck = $_POST['deck']; $ha = $_POST['ha'];  $gradeschool = $_POST['gradeschool']; $midschool = $_POST['midschool']; $highschool = $_POST['highschool']; $notes = $_POST['notes']; $distance = $_POST['distance']; $propTax = $_POST['propTax'];  $daysOnMarket = $_POST['daysOnMarket']; $heat = $_POST['heat']; 
						
$valArray = array($sqftTotal, $lot, $levels, $age, $price, $rooms, $beds, $baths, $garageSize, $basement, $basementFloor, $typeKitchen, $kitchenFloor, $kitchenCounter, $kitchenCabinets, $bathFloorA, $bathCounterA, $showerStallA, $bathStorageA, $bathFloor, $bathCounter, $mBedFloor, $mBedCloset, $bedFloor, $bedCloset, $mBathFloor, $mBathLinen, $hallOne, $hallTwo, $hallThree, $hallFour, $fenceType, $lRoom, $lStorage, $lLevel, $cabSpace, $pantry, $den, $rec, $sun, $mud, $office, $fireplace, $fridge, $oven, $oRange, $disposal, $dishwasher, $breakfastBar, $microwave, $washer, $dryer, $pool, $hTub, $deck, $ha, $gradeschool, $midschool, $highschool, $notes, $distance, $propTax, $days, $heat);
	
//$rating = rating($valArray);



	switch ($process)
	{
		case 'add':
		$sql="INSERT INTO space ( street, city, sqftTotal, sqftFin, sqftUnFin, lot, levels, age, price, rooms, beds, baths, garageSize, basement, basementFloor, typeKitchen, kitchenFloor, kitchenCounter, kitchenCabinets, bathFloorA, bathCounterA, showerStallA, bathStorageA, bathFloorB, bathCounterB, showerStallB, bathStorageB, mBedCloset, bedFloor, bedCloset, mBathFloor, mBathLinen, hallOne, hallTwo, hallThree, hallFour, fenceType, lRoom, lStorage, lLevel, cabSpace, pantry, den, rec, sun, mud, office, fireplace, fridge, oven, oRange, disposal, dishwasher, breakfastBar, microwave, washer, dryer, pool, hTub, deck, ha, gradeschool, midschool, highschool, notes, distance, propTax, daysOnMarket, heat )
		VALUES
		(	'$street', '$city', '$sqftTotal', '$sqftFin', '$sqftUnFin', '$lot', '$levels', '$age', '$price', '$rooms', '$beds', '$baths', '$garageSize', '$basement', '$basementFloor', '$typeKitchen', '$kitchenFloor', '$kitchenCounter', '$kitchenCabinets', '$bathFloorA', '$bathCounterA', '$showerStallA', '$bathStorageA', '$bathFloorB', '$bathCounterB', '$showerStallB', '$bathStorageB', '$mBedCloset', '$bedFloor', '$bedCloset', '$mBathFloor', '$mBathLinen', '$hallOne', '$hallTwo', '$hallThree', '$hallFour', '$fenceType', '$lRoom', '$lStorage', '$lLevel', '$cabSpace', '$pantry', '$den', '$rec', '$sun', '$mud', '$office', '$fireplace', '$fridge', '$oven', '$oRange', '$disposal', '$dishwasher', '$breakfastBar', '$microwave', '$washer', '$dryer', '$pool', '$hTub', '$deck', '$ha', '$gradeschool', '$midschool', '$highschool', '$notes', '$distance', '$propTax', '$daysOnMarket', '$heat')";
		
	//	$sql2 = "SELECT LAST_INSERT_ID()";
		
		//$imgUpload = '';
	break;
	
	case 'edit':
		$sql="UPDATE space
		SET street = '$street', city = '$city', price = '$price', sqftTotal = '$sqftTotal', levels = '$level', sqftFin = '$sqftFin', distance = '$distance', propTax = '$propTax', age = '$age', beds = '$beds', baths = '$baths', sqftUnFin = '$sqftUnFin', lot = '$lot', ha = '$ha', fence = '$fence', cooling = '$cooling', dishwasher = '$dishwasher', fridge = '$fridge', oven = '$oven', disposal = '$disposal', microwave = '$microwave', ha_fee = '$ha_fee', fireplace = '$fireplace', garageSize = '$garageSize', breakfastBar = '$breakfastBar', washer = '$washer', dryer = '$dryer', heat = '$heat',	rooms = '$rooms', basement = '$basement', laundry = '$laundry', pool = '$pool', gradeschool = '$gradeschool', midschool = '$midschool', highschool = '$highschool', oRange = '$oRange', typeKitchen = '$typeKitchen', kitchenFloor = '$kitchenFloor', kitchenCabinets = '$kitchenCabinets',	kitchenSink = '$kitchenSink', bathFloor = '$bathFloor', bathCounter = '$bathCounter', showerStall = '$showerStall', basementFloor = '$basementFloor', basementWalls = '$basementWalls', familyFloor = '$familyFloor', bedFloor = '$bedFloor', fenceType = '$fenceType', daysOnMarket = '$daysOnMarket', rating = '$rating', kitchenCounter = '$kitchenCounter', rating = '$rating'
		WHERE priKey = '$priKey'";
		
	break;
	}

dbConnect($sql);

/*	if ( $process == 'add' )
	{
		$priKey = dbConnect($sql2);
	} */

//	unset($sql, $process, $rating, $valArray, $process, $priKey);
}
?>