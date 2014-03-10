<?php

function processForm($process, $priKey = "")
{
	echo 'here';
			$street = $_POST['street']; $city = $_POST['city']; $price = $_POST['price']; $sqftTotal = $_POST['sqftTotal']; $level = $_POST['level']; $sqftFin = $_POST['sqftFin']; $distance = $_POST['distance']; $propTax = $_POST['propTax']; $age = $_POST['age']; $beds = $_POST['beds']; $baths = $_POST['baths']; $sqftUnFin = $_POST['sqftUnFin']; $lot = $_POST['lot']; $ha = $_POST['ha']; $fence = $_POST['fence']; $cooling = $_POST['cooling']; $dishwasher = $_POST['dishwasher']; $fridge = $_POST['fridge']; $oven = $_POST['oven']; $disposal = $_POST['disposal']; $microwave = $_POST['microwave']; $ha_fee = $_POST['ha_fee']; $fireplace = $_POST['fireplace']; $garageSize = $_POST['garageSize']; $bBar = $_POST['bBar']; $washer = $_POST['washer']; $dryer = $_POST['dryer']; $heat = $_POST['heat']; $rooms = $_POST['rooms']; $basement = $_POST['basement']; $laundry = $_POST['laundry']; $pool = $_POST['pool']; $gradeschool = $_POST['gradeschool']; $midschool = $_POST['midschool']; $highschool = $_POST['highschool']; $oRange = $_POST['oRange']; $typeKitchen = $_POST['typeKitchen']; $kitchenFloor = $_POST['kitchenFloor']; $kitchenCabinets = $_POST['kitchenCabinets']; $kitchenSink = $_POST['kitchenSink']; $bathFloor = $_POST['bathFloor']; $bathCounter = $_POST['bathCounter']; $showerStall = $_POST['showerStall']; $basementFloor = $_POST['basementFloor']; $basementWalls = $_POST['basementWalls']; $familyFloor = $_POST['familyFloor']; $bedFloor = $_POST['bedFloor']; $fenceType = $_POST['fenceType']; $daysOnMarket = $_POST['days']; $kitchenCounter = $_POST['kitchenCounter'];
			
			$valArray = array($sqftTotal, $price, $age, $basement, $rooms, $level, $gradeschool, $midschool, $highschool, $beds, $laundry, $distance, $baths, $garageSize, $lot, $washer, $dryer, $fence, $propTax, $ha_fee, $dishwasher, $oven, $oRange, $disposal, $fridge, $bBar, $pool, $ha, $fireplace, $microwave);
	
$rating = rating($valArray);

	switch ($process)
	{
		case 'add':
		$sql="INSERT INTO space ( street, city, price, sqftTotal, levels, sqftFin, distance, propTax, age, beds, baths, sqftUnFin, lot, ha, fence, cooling, dishwasher, fridge, oven, disposal, microwave, ha_fee, fireplace, garageSize, breakfastBar, washer, dryer, heat, rooms, basement, laundry, pool, gradeschool, midschool, highschool, oRange, typeKitchen, kitchenFloor, kitchenCabinets, kitchenSink, bathFloor, bathCounter, showerStall, basementFloor, basementWalls, familyFloor, bedFloor, fenceType, daysOnMarket, rating, kitchenCounter)
		VALUES
		(	'$street', '$city', '$price', '$sqftTotal', '$level', '$sqftFin', '$distance', '$propTax', '$age', '$beds', '$baths', '$sqftUnFin', '$lot', '$ha', '$fence', '$cooling', '$dishwasher', '$fridge', '$oven', '$disposal', '$microwave', '$ha_fee', '$fireplace', '$garageSize', '$bBar', '$washer', '$dryer', '$heat', '$rooms', '$basement', '$laundry', '$pool', '$gradeschool', '$midschool', '$highschool', '$oRange', '$typeKitchen', '$kitchenFloor', '$kitchenCabinets', '$kitchenSink', '$bathFloor', '$bathCounter', '$showerStall', '$basementFloor', '$basementWalls', '$familyFloor', '$bedFloor', '$fenceType', '$daysOnMarket', '$rating', '$kitchenCounter')";
	break;
	
	case 'edit':
		$sql="UPDATE space
		SET street = '$street', city = '$city', price = '$price', sqftTotal = '$sqftTotal', levels = '$level', sqftFin = '$sqftFin', distance = '$distance', propTax = '$propTax', age = '$age', beds = '$beds', baths = '$baths', sqftUnFin = '$sqftUnFin', lot = '$lot', ha = '$ha', fence = '$fence', cooling = '$cooling', dishwasher = '$dishwasher', fridge = '$fridge', oven = '$oven', disposal = '$disposal', microwave = '$microwave', ha_fee = '$ha_fee', fireplace = '$fireplace', garageSize = '$garageSize', breakfastBar = '$bBar', washer = '$washer', dryer = '$dryer', heat = '$heat',	rooms = '$rooms', basement = '$basement', laundry = '$laundry', pool = '$pool', gradeschool = '$gradeschool', midschool = '$midschool', highschool = '$highschool', oRange = '$oRange', typeKitchen = '$typeKitchen', kitchenFloor = '$kitchenFloor', kitchenCabinets = '$kitchenCabinets',	kitchenSink = '$kitchenSink', bathFloor = '$bathFloor', bathCounter = '$bathCounter', showerStall = '$showerStall', basementFloor = '$basementFloor', basementWalls = '$basementWalls', familyFloor = '$familyFloor', bedFloor = '$bedFloor', fenceType = '$fenceType', daysOnMarket = '$daysOnMarket', rating = '$rating', kitchenCounter = '$kitchenCounter', rating = '$rating'
		WHERE priKey = '$priKey'";
		
	break;
	}
dbConnect($sql);

//	unset($sql, $process, $rating, $valArray, $process, $priKey);
}
?>