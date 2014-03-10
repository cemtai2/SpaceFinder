<?php

function printForm($type)
{
	switch ($type)
	{
		case 'add':
			echo "
			<fieldset>
				<legend>Basics</legend>
				
				<div>
					<input type='text' name='street'      id='street'      placeholder='Street Address' />				
					<input type='text' name='city'        id='city'        placeholder='City' />
				</div>
	
				<div>			
					<input type='text' name='sqftTotal'   id='sqftTotal'   placeholder='Total SqFt' />
					<input type='text' name='sqftFin'     id='sqftFin'     placeholder='Finished SqFt' />
					<input type='text' name='sqftUnFin'   id='sqftUnFin'   placeholder='Unfinished SqFt' />
				</div>
				
				<div>
					<input type='text' name='level'       id='level'       placeholder='Levels' />
					<input type='text' name='age'         id='age'         placeholder='Age' />
					<input type='text' name='price'       id='price'       placeholder='Price' />
				</div>			
			</fieldset>
			
			<fieldset>
				<legend>Rooms</legend>
				
				<div>
					<input type='text' name='rooms'       id='room'        placeholder='# of Rooms' />
					<input type='text' name='beds'        id='beds'        placeholder='# of Bedrooms' />
					<input type='text' name='baths'       id='baths'       placeholder='# of Bathrooms' />
					<input type='text' name='garageSize'  id='garageSize'  placeholder='Garage Size' />
				</div>
				
				<div>
					<input type='text' name='basement'    id='basement'    placeholder='Basement' />
					<input type='text' name='lot'         id='lot'         placeholder='Lot' />
		
					<select name='typeKitchen' id='typeKitchen'>
						<option value=''>Type of Kitchen</option>
						<option value='onewall'>One Wall</option>
						<option value='galley'>Galley</option>
						<option value='lshape'>L-Shape</option>
						<option value='horseshoe'>Horseshoe</option>
						<option value='island'>Island</option>
						<option value='peninsula'>Peninsula</option>
					</select>
				</div>
			</fieldset>
			
			<fieldset>
				<legend>Flooring and Materials</legend>
				
					<fieldset>
						<legend>Kitchen Materials</legend>
				
						<select name='kitchenFloor' id='kitchenFloor'>
							<option value=''>Kitchen Flooring</option>
							<option value='wood'>Wood</option>
							<option value='linolium'>Linolium</option>
							<option value='ceramic'>Ceramic</option>
							<option value='stone'>Stone</option>
						</select>
	
						<select name='kitchenCounters' id='kitchenCounters'>
							<option value=''>Kitchen Counters</option>
							<option value='granite'>Granite</option>
							<option value='stone'>Stone</option>
							<option value='formica'>Formica</option>
						</select>			
	
						<select name='kitchenCabinets' id='kitchenCabinets'>
							<option value=''>Kitchen Cabinets</option>
							<option value='hq'>High Quality</option>
							<option value='mq'>Medium Quality</option>
							<option value='lq'>Low Quality</option>			
						</select>
						
						<select name='kitchenSink' id='kitchenSink'>
							<option value=''>Kitchen Sink</option>
							<option value='stainless'>Stainless Steel</option>
							<option value='ceramic'>Ceramic</option>
							<option value='granite'>Granite</option>
							<option value='fireclay'>Fireclay</option>
							<option value='castIron'>Cast Iron</option>
							<option value='stone'>Stone</option>
							<option value='quartz'>Quartz</option>
							<option value='solid'>Solid Surface</option>
							<option value='copper'>Copper</option>
						</select>					
					</fieldset>
					
					<fieldset>
						<legend>Bathroom Materials</legend>
						
						<select name='bathFloor' id='bathFloor'>
							<option value=''>Bathroom Flooring</option>
							<option value='wood'>Wood</option>
							<option value='linolium'>Linolium</option>
							<option value='ceramic'>Ceramic</option>
							<option value='stone'>Stone</option>
						</select>
						
						<select name='bathCounter' id='bathCounter'>
							<option value=''>Bathroom Vanity</option>
							<option value='granite'>Granite</option>
							<option value='formica'>Formica</option>
							<option value='lq'>Low Quality</option>
						</select>
						
						<select name='showerStall' id='showerStall'>
							<option value=''>Shower Stall</option>
							<option value='tile'>Tile</option>
							<option value='fiberglass'>Fiberglass</option>
						</select>
					</fieldset>
					
					<fieldset>
						<legend>Basement Materials</legend>
	
						<select name='basementFloor' id='basementFloor'>
							<option value=''>Basement Flooring</option>
							<option value='wood'>Wood</option>
							<option value='linolium'>Linolium</option>
							<option value='ceramic'>Ceramic</option>
							<option value='stone'>Stone</option>
							<option value='concrete'>Concrete</option>
						</select>
	
						<select name='basementWalls' id='basementWalls'>
							<option value=''>Basement Walls</option>
							<option value='wood'>Wood</option>
							<option value='drywall'>Drywall</option>
							<option value='plaster'>Plaster</option>
						</select>
					</fieldset>
					
					<fieldset>
						<legend>Other Floors</legend>
				
						<select name='familyFloor' id='familyFloor'>
							<option value=''>Family Room Flooring</option>
							<option value='wood'>Wood</option>
							<option value='linolium'>Linolium</option>
							<option value='ceramic'>Ceramic</option>
							<option value='stone'>Stone</option>
						</select>
				
						<select name='bedFloor' id='bedFloor'>
							<option value='wood'>Wood</option>
							<option value='linolium'>Linolium</option>
							<option value='ceramic'>Ceramic</option>
							<option value='stone'>Stone</option>
						</select>	
					</fieldset>		
			</fieldset>
			
			<fieldset>
				<legend>Schools</legend>
						
				<input type='text' name='gradeschool' id='gradeschool' placeholder='Gradeschool Rating' />
				<input type='text' name='midschool'   id='midschool'   placeholder='Middle School Rating' />
				<input type='text' name='highschool'  id='highschool'  placeholder='Highschool Rating' />
			</fieldset>
				
			<fieldset>
				<legend>Amenities</legend>
				<input type='text'     name='fence'       id='fence'       placeholder='Fence' />
				<select name='fenceType' id='fenceType'>
					<option value='partialFence'>Partial Fence</option>
					<option value='ppFence'>Partial Privacy Fence</option>
					<option value='fpFence'>Full Privacy Fence</option>
				</select>
				
				<span>
					<label for='dishwasher'>Dishwasher</label>
					<input type='hidden' name='dishwasher' value='no' />
					<input type='checkbox' name='dishwasher' value='yes' id='dishwasher' placeholder='Dishwasher' />
				</span>
				
				<span>
					<label for='fridge'>Refridgerator</label>
					<input type='hidden' name='fridge' value='no' />
					<input type='checkbox' name='fridge'     value='yes' id='fridge'     placeholder='Fridge' />
				</span>
				
				<span>
					<label for='oven'>Oven</label>
					<input type='hidden' name='oven' value='no' />
					<input type='checkbox' name='oven'       value='yes' id='oven'       placeholder='Oven' />
				</span>
				
				<span>
					<label for='oRange'>Range</label>
					<input type='hidden' name='oRange' value='no' />
					<input type='checkbox' name='oRange'     value='yes' id='oRange'     placeholder='Range' />
				</span>
				
				<span>
					<label for='disposal'>Disposal</label>
					<input type='hidden' name='disposal' value='no' />
					<input type='checkbox' name='disposal'   value='yes' id='disposal'   placeholder='Disposal' />
				</span>
				
				<span>
					<label for='microwave'>Microwave</label>
					<input type='hidden' name='microwave' value='no' />
					<input type='checkbox' name='microwave'  value='yes' id='microwave'  placeholder='Microwave' />
				</span>
				
				<span>
					<label for='fireplace'>Fireplace</label>
					<input type='hidden' name='fireplace' value='no' />
					<input type='checkbox' name='fireplace'  value='yes' id='fireplace'  placeholder='Fireplace' />
				</span>
				
				<span>
					<label for='bBar'>Breakfast Bar</label>
					<input type='hidden' name='bBar' value='no' />
					<input type='checkbox' name='bBar'       value='yes' id='bBar'       placeholder='Breakfast Bar' />
				</span>
				
				<span>
					<label for='washer'>Washer</label>
					<input type='hidden' name='washer' value='no' />
					<input type='checkbox' name='washer'     value='yes' id='washer'     placeholder='Washer' />
				</span>
				
				<span>
					<label='dryer'>Dryer</label>
					<input type='hidden' name='dryer' value='no' />
					<input type='checkbox' name='dryer'      value='yes' id='dryer'      placeholder='Dryer' />
				</span>
							
				<span>
					<label for='pool'>Pool</label>
					<input type='hidden' name='pool' value='no' />
					<input type='checkbox' name='pool'       value='yes' id='pool'       placeholder='Pool' />
				</span>
			</fieldset>
			
			<fieldset>
				<legend>Other</legend>
				<input type='text' name='laundry'     id='laundry'    placeholder='Laundry Floor' />
				<input type='text' name='distance'    id='distance'    placeholder='Distance' />
				<input type='text' name='propTax'     id='propTax'     placeholder='Property Tax' />
				<input type='text' name='ha'          id='ha'          placeholder='Homeowners Association' />
				<input type='text' name='ha_fee'      id='ha_fee'      placeholder='Homeowners Association Fee' />
				<input type='text' name='cooling'     id='cooling'     placeholder='Air Conditioning' />
				<input type='text' name='heat'        id='heat'        placeholder='Heat' />
				<input type='text' name='days'        id='days'        placeholder='Days on Market' />
			</fieldset>
	
			";
		break;
		
		case 'edit':
			echo "
			<fieldset>
				<legend>Basics</legend>
				
				<div>
					<input type='text' name='street'      id='street'      placeholder='Street Address' value='" . $info['street'] . "' />				
					<input type='text' name='city'        id='city'        placeholder='City' value='" . $info['city'] . "' />
				</div>
	
				<div>			
					<input type='text' name='sqftTotal'   id='sqftTotal'   placeholder='Total SqFt' value='" . $info['sqftTotal'] . "' />
					<input type='text' name='sqftFin'     id='sqftFin'     placeholder='Finished SqFt' value='" . $info['sqftFin'] . "' />
					<input type='text' name='sqftUnFin'   id='sqftUnFin'   placeholder='Unfinished SqFt' value='" . $info['sqftUnFin'] . "' />
				</div>
				
				<div>
					<input type='text' name='level'       id='level'       placeholder='Levels' value='" . $info['levels'] . "' />
					<input type='text' name='age'         id='age'         placeholder='Age' value='" . $info['age'] . "' />
					<input type='text' name='price'       id='price'       placeholder='Price' value='" . $info['price'] . "' />
				</div>			
			</fieldset>
			
			<fieldset>
				<legend>Rooms</legend>
				
				<div>
					<input type='text' name='rooms'       id='room'        placeholder='# of Rooms' value='" . $info['rooms'] . "' />
					<input type='text' name='beds'        id='beds'        placeholder='# of Bedrooms' value='" . $info['beds'] . "' />
					<input type='text' name='baths'       id='baths'       placeholder='# of Bathrooms' value='" . $info['baths'] . "' />
					<input type='text' name='garageSize'  id='garageSize'  placeholder='Garage Size' value='" . $info['garageSize'] . "' />
				</div>
				
				<div>
					<input type='text' name='basement'    id='basement'    placeholder='Basement' value='" . $info['basement'] . "' />
					<input type='text' name='lot'         id='lot'         placeholder='Lot' value='" . $info['lot'] . "' />
		
					<select name='typeKitchen' id='typeKitchen' value='" . $info['typeKitchen'] . "' >
						<option value=''>Type of Kitchen</option>
						<option value='onewall'>One Wall</option>
						<option value='galley'>Galley</option>
						<option value='lshape'>L-Shape</option>
						<option value='horseshoe'>Horseshoe</option>
						<option value='island'>Island</option>
						<option value='peninsula'>Peninsula</option>
					</select>
				</div>
			</fieldset>
			
			<fieldset>
				<legend>Flooring and Materials</legend>
				
					<fieldset>
						<legend>Kitchen Materials</legend>
				
						<select name='kitchenFloor' id='kitchenFloor' value='" . $info['kitchenFloor'] . "' >
							<option value=''>Kitchen Flooring</option>
							<option value='wood'>Wood</option>
							<option value='linolium'>Linolium</option>
							<option value='ceramic'>Ceramic</option>
							<option value='stone'>Stone</option>
						</select>
	
						<select name='kitchenCounters' id='kitchenCounters' value='" . $info['kitchenCounter'] . "' >
							<option value=''>Kitchen Counters</option>
							<option value='granite'>Granite</option>
							<option value='stone'>Stone</option>
							<option value='formica'>Formica</option>
						</select>			
	
						<select name='kitchenCabinets' id='kitchenCabinets' value='" . $info['kitchenCabinets'] . "' >
							<option value=''>Kitchen Cabinets</option>
							<option value='hq'>High Quality</option>
							<option value='mq'>Medium Quality</option>
							<option value='lq'>Low Quality</option>			
						</select>
						
						<select name='kitchenSink' id='kitchenSink' value='" . $info['kitchenSink'] . "' >
							<option value=''>Kitchen Sink</option>
							<option value='stainless'>Stainless Steel</option>
							<option value='ceramic'>Ceramic</option>
							<option value='granite'>Granite</option>
							<option value='fireclay'>Fireclay</option>
							<option value='castIron'>Cast Iron</option>
							<option value='stone'>Stone</option>
							<option value='quartz'>Quartz</option>
							<option value='solid'>Solid Surface</option>

							<option value='copper'>Copper</option>
						</select>					
					</fieldset>
					
					<fieldset>
						<legend>Bathroom Materials</legend>
						
						<select name='bathFloor' id='bathFloor' value='" . $info['bathFloor'] . "' >
							<option value=''>Bathroom Flooring</option>
							<option value='wood'>Wood</option>
							<option value='linolium'>Linolium</option>
							<option value='ceramic'>Ceramic</option>
							<option value='stone'>Stone</option>
						</select>
						
						<select name='bathCounter' id='bathCounter' value='" . $info['bathCounter'] . "' >
							<option value=''>Bathroom Vanity</option>
							<option value='granite'>Granite</option>
							<option value='formica'>Formica</option>
							<option value='lq'>Low Quality</option>
						</select>
						
						<select name='showerStall' id='showerStall' value='" . $info['showerStall'] . "' >
							<option value=''>Shower Stall</option>
							<option value='tile'>Tile</option>
							<option value='fiberglass'>Fiberglass</option>
						</select>
					</fieldset>
					
					<fieldset>
						<legend>Basement Materials</legend>
	
						<select name='basementFloor' id='basementFloor' value='" . $info['basementFloor'] . "' >
							<option value=''>Basement Flooring</option>
							<option value='wood'>Wood</option>
							<option value='linolium'>Linolium</option>
							<option value='ceramic'>Ceramic</option>
							<option value='stone'>Stone</option>
							<option value='concrete'>Concrete</option>
						</select>
	
						<select name='basementWalls' id='basementWalls' value='" . $info['basementWalls'] . "' >
							<option value=''>Basement Walls</option>
							<option value='wood'>Wood</option>
							<option value='drywall'>Drywall</option>
							<option value='plaster'>Plaster</option>
						</select>
					</fieldset>
					
					<fieldset>
						<legend>Other Floors</legend>
				
						<select name='familyFloor' id='familyFloor' value='" . $info['familyFloor'] . "' >
							<option value=''>Family Room Flooring</option>
							<option value='wood'>Wood</option>
							<option value='linolium'>Linolium</option>
							<option value='ceramic'>Ceramic</option>
							<option value='stone'>Stone</option>
						</select>
				
						<select name='bedFloor' id='bedFloor' value='" . $info['bedFloor'] . "' >
							<option value='wood'>Wood</option>
							<option value='linolium'>Linolium</option>
							<option value='ceramic'>Ceramic</option>
							<option value='stone'>Stone</option>
						</select>	
					</fieldset>		
			</fieldset>
			
			<fieldset>
				<legend>Schools</legend>
						
				<input type='text' name='gradeschool' id='gradeschool' placeholder='Gradeschool Rating' value='" . $info['gradeschool'] . "' />
				<input type='text' name='midschool'   id='midschool'   placeholder='Middle School Rating' value='" . $info['midschool'] . "' />
				<input type='text' name='highschool'  id='highschool'  placeholder='Highschool Rating' value='" . $info['highschool'] . "' />
			</fieldset>
				
			<fieldset>
				<legend>Amenities</legend>
				<input type='text'     name='fence'       id='fence'       placeholder='Fence' value='" . $info['fence'] . "' />
				<select name='fenceType' id='fenceType' value='" . $info['fenceType'] . "' >
					<option value='partialFence'>Partial Fence</option>
					<option value='ppFence'>Partial Privacy Fence</option>
					<option value='fpFence'>Full Privacy Fence</option>
				</select>
				
				<span>
					<label for='dishwasher'>Dishwasher</label>
					<input type='hidden' name='dishwasher' value='no' />
					";
						if($info['dishwasher'] == 'yes')
						{
							echo "<input type='checkbox' name='dishwasher' value='yes' id='dishwasher' placeholder='Dishwasher' checked/>";
						}
						else
						{
							echo "<input type='checkbox' name='dishwasher' value='yes' id='dishwasher' placeholder='Dishwasher' />";
						}
					echo "
				</span>
				
				<span>
					<label for='fridge'>Refridgerator</label>
					<input type='hidden' name='fridge' value='no' />
					";
						if($info['fridge'] == 'yes')
						{
							echo "<input type='checkbox' name='fridge' value='yes' id='fridge' placeholder='Fridge' checked/>";
						}
						else
						{
							echo "<input type='checkbox' name='fridge' value='yes' id='fridge' placeholder='Fridge' />";
						}
					echo "
				</span>
				
				<span>
					<label for='oven'>Oven</label>
					<input type='hidden' name='oven' value='no' />
					";
						if($info['oven'] == 'yes')
						{
							echo "<input type='checkbox' name='oven' value='yes' id='oven' placeholder='Oven' checked/>";
						}
						else
						{
							echo "<input type='checkbox' name='oven' value='yes' id='oven' placeholder='Oven' />";
						}
					echo "
				</span>
				
				<span>
					<label for='oRange'>Range</label>
					<input type='hidden' name='oRange' value='no' />
					";
						if($info['oRange'] == 'yes')
						{
							echo "<input type='checkbox' name='oRange' value='yes' id='oRange' placeholder='Range' checked/>";
						}
						else
						{
							echo "<input type='checkbox' name='oRange' value='yes' id='oRange' placeholder='Range' />";
						}
					echo "
				</span>
				
				<span>
					<label for='disposal'>Disposal</label>
					<input type='hidden' name='disposal' value='no' />
					";
						if($info['disposal'] == 'yes')
						{
							echo "<input type='checkbox' name='disposal' value='yes' id='disposal' placeholder='Disposal' checked/>";
						}
						else
						{
							echo "<input type='checkbox' name='disposal' value='yes' id='disposal' placeholder='Disposal' />";
						}
					echo "
				</span>
				
				<span>
					<label for='microwave'>Microwave</label>
					<input type='hidden' name='microwave' value='no' />
					";
						if($info['microwave'] == 'yes')
						{
							echo "<input type='checkbox' name='microwave' value='yes' id='microwave' placeholder='Microwave' checked/>";
						}
						else
						{
							echo "<input type='checkbox' name='microwave' value='yes' id='microwave' placeholder='Microwave' />";
						}
					echo "
				</span>
				
				<span>
					<label for='fireplace'>Fireplace</label>
					<input type='hidden' name='fireplace' value='no' />
					";
						if($info['fireplace'] == 'yes')
						{
							echo "<input type='checkbox' name='fireplace' value='yes' id='fireplace' placeholder='Fireplace' checked/>";
						}
						else
						{
							echo "<input type='checkbox' name='fireplace' value='yes' id='fireplace' placeholder='Fireplace' />";
						}
					echo "
				</span>
				
				<span>
					<label for='bBar'>Breakfast Bar</label>
					<input type='hidden' name='bBar' value='no' />
					";
						if($info['breakfastBar'] == 'yes')
						{
							echo "<input type='checkbox' name='bBar' value='yes' id='bBar' placeholder='Breakfast Bar' checked/>";
						}
						else
						{
							echo "<input type='checkbox' name='bBar' value='yes' id='bBar' placeholder='Breakfast Bar' />";
						}
					echo "
				</span>
				
				<span>
					<label for='washer'>Washer</label>
					<input type='hidden' name='washer' value='no' />
					";
						if($info['washer'] == 'yes')
						{
							echo "<input type='checkbox' name='washer' value='yes' id='washer' placeholder='Washer' checked/>";
						}
						else
						{
							echo "<input type='checkbox' name='washer' value='yes' id='washer' placeholder='Washer' />";
						}
					echo "
				</span>
				
				<span>
					<label='dryer'>Dryer</label>
					<input type='hidden' name='dryer' value='no' />
					";
						if($info['dryer'] == 'yes')
						{
							echo "<input type='checkbox' name='dryer' value='yes' id='dryer' placeholder='Dryer' checked/>";
						}
						else
						{
							echo "<input type='checkbox' name='dryer' value='yes' id='dryer' placeholder='Dryer' />";
						}
					echo "
				</span>
							
				<span>
					<label for='pool'>Pool</label>
					<input type='hidden' name='pool' value='no' />
					";
						if($info['pool'] == 'yes')
						{
							echo "<input type='checkbox' name='pool' value='yes' id='pool' placeholder='Pool' checked/>";
						}
						else
						{
							echo "<input type='checkbox' name='pool' value='yes' id='pool' placeholder='Pool' />";
						}
					echo "
				</span>
			</fieldset>
			
			<fieldset>
				<legend>Other</legend>
				<input type='text' name='laundry'     id='laundry'     placeholder='Laundry Floor' value='" . $info['laundry'] . "' />
				<input type='text' name='distance'    id='distance'    placeholder='Distance' value='" . $info['distance'] . "' />
				<input type='text' name='propTax'     id='propTax'     placeholder='Property Tax' value='" . $info['propTax'] . "' />
				<input type='text' name='ha'          id='ha'          placeholder='Homeowners Association' value='" . $info['ha'] . "' />
				<input type='text' name='ha_fee'      id='ha_fee'      placeholder='Homeowners Association Fee' value='" . $info['ha_fee'] . "' />
				<input type='text' name='cooling'     id='cooling'     placeholder='Air Conditioning' value='" . $info['cooling'] . "' />
				<input type='text' name='heat'        id='heat'        placeholder='Heat' value='" . $info['heat'] . "' />
				<input type='text' name='days'        id='days'        placeholder='Days on Market' value='" . $info['daysOnMarket'] . "' />
			</fieldset>
	
			<input type='hidden' name='type' id='type' value='edit' />
			
			<button type='submit'>Save</button>
		</form>
	</div>";
		break;
		
		case 'remove':
		break;
		
		default:
		break;
		
	}
	
	//unset($type, $info);
}

function processForm()
{
	$street = $_POST['street']; $city = $_POST['city']; $price = $_POST['price']; $sqftTotal = $_POST['sqftTotal']; $level = $_POST['level']; $sqftFin = $_POST['sqftFin']; $distance = $_POST['distance']; $propTax = $_POST['propTax']; $age = $_POST['age']; $beds = $_POST['beds']; $baths = $_POST['baths']; $sqftUnFin = $_POST['sqftUnFin']; $lot = $_POST['lot']; $ha = $_POST['ha']; $fence = $_POST['fence']; $cooling = $_POST['cooling']; $dishwasher = $_POST['dishwasher']; $fridge = $_POST['fridge']; $oven = $_POST['oven']; $disposal = $_POST['disposal']; $microwave = $_POST['microwave']; $ha_fee = $_POST['ha_fee']; $fireplace = $_POST['fireplace']; $garageSize = $_POST['garageSize']; $bBar = $_POST['bBar']; $washer = $_POST['washer']; $dryer = $_POST['dryer']; $heat = $_POST['heat']; $rooms = $_POST['rooms']; $basement = $_POST['basement']; $laundry = $_POST['laundry']; $pool = $_POST['pool']; $gradeschool = $_POST['gradeschool']; $midschool = $_POST['midschool']; $highschool = $_POST['highschool']; $oRange = $_POST['oRange']; $typeKitchen = $_POST['typeKitchen']; $kitchenFloor = $_POST['kitchenFloor']; $kitchenCabinets = $_POST['kitchenCabinets']; $kitchenSink = $_POST['kitchenSink']; $bathFloor = $_POST['bathFloor']; $bathCounter = $_POST['bathCounter']; $showerStall = $_POST['showerStall']; $basementFloor = $_POST['basementFloor']; $basementWalls = $_POST['basementWalls']; $familyFloor = $_POST['familyFloor']; $bedFloor = $_POST['bedFloor']; $fenceType = $_POST['fenceType']; $daysOnMarket = $_POST['days'];
	
$sql="INSERT INTO space ( 
	street,
	city, 
	price, 
	sqftTotal, 
	levels, 
	sqftFin, 
	distance, 
	propTax, 
	age, 
	beds, 
	baths, 
	sqftUnFin, 
	lot, 
	ha, 
	fence, 
	cooling, 
	dishwasher, 
	fridge, 
	oven, 
	disposal, 
	microwave, 
	ha_fee, 
	fireplace, 
	garageSize, 
	breakfastBar, 
	washer, 
	dryer, 
	heat, 
	rooms, 
	basement, 
	laundry, 
	pool,
	gradeschool, 
	midschool, 
	highschool, 
	oRange,
	typeKitchen,
	kitchenFloor,
	kitchenCabinets,
	kitchenSink,
	bathFloor,
	bathCounter,
	showerStall,
	basementFloor,
	basementWalls,
	familyFloor,
	bedFloor,
	fenceType,
	daysOnMarket
	)
VALUES
(		
		'$street',
		'$city',
	  '$price',
		'$sqftTotal',
		'$level',
		'$sqftFin',
		'$distance',
		'$propTax',
		'$age',
		'$beds',
		'$baths',
		'$sqftUnFin',
		'$lot',
		'$ha',
		'$fence',
		'$cooling',
		'$dishwasher',
		'$fridge',
		'$oven',
		'$disposal',
		'$microwave',
		'$ha_fee',
		'$fireplace',
		'$garageSize',
		'$bBar',
		'$washer',
		'$dryer',
		'$heat',
		'$rooms',
		'$basement',
		'$laundry',
		'$pool',
		'$gradeschool',
		'$midschool',
		'$highschool',
		'$oRange',
		'$typeKitchen',
		'$kitchenFloor',
		'$kitchenCabinets',
		'$kitchenSink',
		'$bathFloor',
		'$bathCounter',
		'$showerStall',
		'$basementFloor',
		'$basementWalls',
		'$familyFloor',
		'$bedFloor',
		'$fenceType',
		'$daysOnMarket'
		
)";

dbConnect($sql);

//unset($sql);

}