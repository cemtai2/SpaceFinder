<?php

include('sf.php');

// Create table function
function createTable($name, $para)
{
	$sql = "CREATE TABLE " . $name . "(" . $para . ");";
	echo $sql;
	dbConnect($sql);
	
	//unset($name, $para, $sql);
}

$pars = 
	"address CHAR(100) NOT NULL PRIMARY KEY, 
	price INT, 
	sqftTotal INT, 
	school INT, 
	levels INT, 
	sqftFin INT, 
	distance INT, 
	propTax INT, 
	age INT, 
	beds INT, 
	baths INT, 
	sqftUnFin INT, 
	lot INT, 
	ha INT, 
	fence INT, 
	cooling INT, 
	dishwasher INT, 
	fridge INT, 
	oven INT, 
	disposal INT, 
	microwave INT, 
	ha_fee INT, 
	fireplace INT, 
	garageSize INT, 
	breakfastBar INT, 
	washer INT, 
	dryer INT, 
	heat INT, 
	rooms INT, 
	basement INT, 
	laundry INT, 
	pool INT, 
	living INT, 
	dining INT, 
	kitchen INT, 
	family INT, 
	otherRoom INT, 
	master INT, 
	bed2 INT, 
	bed3 INT, 
	bed4 INT, 
	bed5 INT, 
	bed6 INT, 
	masterBath INT";

	// Create space table
	createTable('space', $pars);
	
	//unset($pars);
?>