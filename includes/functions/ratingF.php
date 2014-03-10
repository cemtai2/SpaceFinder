<?php
function good ( $value, $default, $decimal )
{
	$a = ( $value / $default ) * 100;
	$b = $a * $decimal;
	$b = round($b, 2);

	return $b;
	
	//unset($a, $b, $value, $default, $decimal);
}

function bad ( $value, $default, $decimal )
{
	$a = ( $value / $default ) * 100;
	$b = $a * $decimal;
	$c = 0 - $b;
	$c = round($c, 2);

	return $c;
	
	//unset($a, $b, $c, $value, $default, $decimal);
}

function neutral ( $value, $default, $decimal )
{
	$a = ( $value / $default ) * 100;
	$b = $a * $decimal;
	$b = round($b, 2);

	return $b;	
	
	//unset($a, $b, $c, $value, $default, $decimal);
}

function ex($value, $default, $decimal)
{
	if( $value == $default )
	{
		$a = ( 1 * $decimal ) * 100;
	}
	else
	{
		$a = 0;
	}
	
	$a = round($a, 2);
	return $a;
	
	//unset($a, $value, $default, $decimal);
}

function percent($default, $value, $decimal, $charge)
{
	$x = $default - $value;
	
	switch($charge)
	{
		case 'high':
			if( $x < 0 )
			{  //good
				$a = good($value, $default, $decimal);  
			}
			elseif( $x > 0 )
			{ // bad
				$a = bad($value, $default, $decimal);
			}
			else
			{ // neutral
				$a = neutral($value, $default, $decimal);
			}
		break;
		
		case 'low':
			if( $x < 0 )
			{  //bad
				$a =	bad($value, $default, $decimal);
			}
			elseif( $x > 0 )
			{ // good
				$a =	good($value, $default, $decimal);
			}
			else
			{ // neutral
				$a =	neutral($value, $default, $decimal);
			}
		break;
		
		case 'equal':
			if( $x == 0 )
			{
				$a = neutral($value, $default, $decimal);
			}
			else
			{
				echo "not equal <br />";
			}
		break;
		
		case 'yes':
			if ( $value == $default )
			{
				$a = ( 1 * $decimal) * 100;
			}
			else
			{
				$a = ( -1 * $decimal ) * 100;
			}
		break;
		
		case 'ex':
			$a = ex($default, $value, $decimal);
		break;
		
		default:
		break;
	}
	return $a;
	
	//unset($a, $default, $value, $decimal, $charge, $x);
}
	
function rating($values)
{
	// Default value array
	$defaults = array (2000, 150000, 12, 'yes', 8, 'yes', 7, 7, 7, 3, 'yes', 20, 3, 2.5, .5, 'yes', 'yes', 'yes', 2500, 50, 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes');

	// Rating array
	$rates = array(.15, .12, .07, .06, .06, .05, .04, .04, .04, .04, .03, .03, .03, .03, .03, .02, .02, .02, .02, .02, .02, .02, .02, .005, .005, .005, .005, .005, .0025, .0025);

	// Charge array
	$charge = array('high', 'low', 'low', 'yes', 'high', 'yes', 'high', 'high', 'high', 'high', 'yes', 'low', 'high', 'high', 'high', 'yes', 'yes', 'yes', 'low', 'low', 'yes', 'yes', 'yes', 'ex', 'ex', 'ex', 'ex', 'ex', 'ex', 'ex');

	$total = 0;
	$max = 30;
	for($i = 0; $i < $max; ++$i)
	{ 
		$a = percent( $defaults[$i], $values[$i], $rates[$i], $charge[$i]);
		$total = $total + $a;
	}
	return $total;
	
	//unset($total, $max, $i, $defaults, $rates, $charge, $a, $values);
}
?>
