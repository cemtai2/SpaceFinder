<?php
//This function prints the form based on the parameters that have been passed.  Currently only add form has been tested.  Dreamweaver shows an error on line 7, but the code functions and saves.  Not sure what DW has a problem with. 
function printForm($type, $info = '')
{
    switch ($type) {
        case 'add':
  echo "
	<div class='col cOne'>
			<fieldset class='extraPad'>
				<legend>Basics</legend>
				
				<div class='container'>
					<span>
						<label for='street' class='streetLabel'>street</label>
						<input type='text' name='street' id='street' class='fifteen'/>				
					</span>
					
					<span>
						<label for='city'>city</label>
						<input type='text' name='city' id='city' class='nine' />
					</span>
				</div>
	
				<div class='container'>
					<span>
						<label for='sqftTotal'>total sqft</label>			
						<input type='text' name='sqftTotal' id='sqftTotal' class='three'/>
					</span>
					
					<span>
						<label for='sqftFin'>fin. sqft</label>
						<input type='text' name='sqftFin' id='sqftFin' class='three' />
					</span>
					
					<span>
						<label for='sqftUnFin'>unfin. sqft</label>
						<input type='text' name='sqftUnFin' id='sqftUnFin' class='three' />
					</span>
					
					<span>
						<label for='lot'>lot</label>
						<input type='text' name='lot' id='lot' class='one' />
					</span>

					<span>
						<label for='levels'>level</label>
						<input type='text' name='levels' id='levels' class='one' />
					</span>
					
					<span>
						<label for='age'>age</label>
						<input type='text' name='age' id='age' class='one' />
					</span>
					
					<span>
						<label for='price'>price</label>
						<input type='text' name='price' id='price' class='five' />
					</span>
				</div>			
			</fieldset>
		<div class='rowTwo'>	
			<fieldset class='rooms'>
				<legend>Rooms</legend>
				
				<div class='container'>
					<span>
						<label for='rooms'>rooms</label>
						<input type='text' name='rooms' id='room' class='one' />
					</span>
					
					<span>
						<label for='beds'>beds</label>
						<input type='text' name='beds' id='beds' class='one' />
					</span>
					
					<span>
						<label for='baths'>baths</label>
						<input type='text' name='baths' id='baths' class='one' onChange='bathrooms()' />
					</span>
					
					<span>
						<label for='garageSize'>garage</label>
						<input type='text' name='garageSize' id='garageSize' class='one' />
					</span>
				</div>
				
				<div class='container'>
					<span>
						<label for='basement'>basement</label>
						<select name='basement' id='basement' class='nine'>
							<option value='zero'></option>
							<option value='one'>None</option>
							<option value='two'>Crawlspace</option>
							<option value='three'>Partial Unfinished</option>
							<option value='four'>Partial Finished</option>
							<option value='five'>Full Unfinished</option>
							<option value='six'>Full Partial Finished</option>
							<option value='seven'>Full Finished</option>
						</select>
					</span>
					
					<span>
						<label for='basementFloor'>floor</label>
						<select name='basementFloor' id='basementFloor' class='five'>
							<option value='zero'></option>
							<option value='one'>Epoxy Coating</option>
							<option value='two'>Carpeting</option>
							<option value='three'>Ceramic Tile</option>
							<option value='four'>Wood</option>
						</select>
					</span>
				</div>
			</fieldset>
		
			<fieldset class='kitchen'>
				<legend>kitchen</legend>

				<div class='container'>
					<span>
						<label for='typeKitchen'>kitchen</label>
						<select name='typeKitchen' id='typeKitchen' class='eight'>
							<option value=''></option>
							<option value='onewall'>One Wall</option>
							<option value='galley'>Galley</option>
							<option value='lshape'>L-Shape</option>
							<option value='horseshoe'>Horseshoe</option>
							<option value='island'>Island</option>
							<option value='peninsula'>Peninsula</option>
						</select>
					</span>
										
					<span>
						<label for='kitchenFloor'>floor</label>
						<select name='kitchenFloor' id='kitchenFloor' class='seven'>
							<option value=''></option>
							<option value='wood'>Wood</option>
							<option value='linolium'>Linolium</option>

							<option value='ceramic'>Ceramic</option>
							<option value='stone'>Stone</option>
							<option value='carpet'>Carpet</option>
						</select>
					</span>
				</div>
				
				<div class='container'>
					<span>
						<label for='kitchenCounter'>counters</label>
						<select name='kitchenCounter' id='kitchenCounter' class='eight'>
							<option value=''></option>
							<option value='granite'>Granite</option>
							<option value='stone'>Stone</option>
							<option value='formica'>Formica</option>
						</select>			
					</span>
					
					<span>
						<label for='kitchenCabinets'>cabinets</label>
						<select name='kitchenCabinets' id='kitchenCabinets' class='seven'>
							<option value=''></option>
							<option value='hq'>High Quality</option>
							<option value='mq'>Medium Quality</option>
							<option value='lq'>Low Quality</option>			
						</select>
					</span>
				</div>
			</fieldset>
		</div>	
			<fieldset class='bathroom' id='bathroom'>
				<legend>bathroom</legend>
				
				<div class='container'>
					<span>
						<label for='bathFloorA'>floor</label>
						<select name='bathFloorA' id='bathFloorA' class='six'>
							<option value=''></option>
							<option value='wood'>Wood</option>
							<option value='linolium'>Linolium</option>
							<option value='ceramic'>Ceramic</option>
							<option value='stone'>Stone</option>
						</select>
					</span>
					
					<span>
						<label for='bathCounterA'>Vanity</label>
						<select name='bathCounterA' id='bathCounterA' class='six'>
							<option value=''></option>
							<option value='granite'>Granite</option>
							<option value='formica'>Formica</option>
							<option value='lq'>Low Quality</option>
						</select>
					</span>
					
					<span>
						<label for='showerStallA'>Shower Material</label>
						<select name='showerStallA' id='showerStallA' class='thirteen'>
							<option value=''></option>
							<option value='tile'>Tile</option>
							<option value='fiberglass'>Fiberglass</option>
						</select>						
					</span>

					<span>
						<label for='bathStorageA'>Storage</label>
						<select name='bathStorageA' id='bathStorageA' class='eleven'>
							<option value=''></option>
							<option value='small'>Small</option>
							<option value='medium'>Medium</option>
							<option value='large'>Large</option>
						</select>
					</span>
				</div>
				
				<div class='container'>
					<span>
						<label for='bathFloorB'>floor</label>
						<select name='bathFloorB' id='bathFloorB' class='six'>
							<option value=''></option>
							<option value='wood'>Wood</option>
							<option value='linolium'>Linolium</option>
							<option value='ceramic'>Ceramic</option>
							<option value='stone'>Stone</option>
						</select>
					</span>
					
					<span>
						<label for='bathCounterB'>Vanity</label>
						<select name='bathCounterB' id='bathCounterB' class='six'>
							<option value=''></option>
							<option value='granite'>Granite</option>
							<option value='formica'>Formica</option>
							<option value='lq'>Low Quality</option>
						</select>
					</span>
					
					<span>
						<label for='showerStallB'>Shower Material</label>
						<select name='showerStallB' id='showerStallB' class='thirteen'>
							<option value=''></option>
							<option value='tile'>Tile</option>
							<option value='fiberglass'>Fiberglass</option>
						</select>						
					</span>

					<span>
						<label for='bathStorageB'>Storage</label>
						<select name='bathStorageB' id='bathStorageB' class='eleven'>
							<option value=''></option>
							<option value='small'>Small</option>
							<option value='medium'>Medium</option>
							<option value='large'>Large</option>
						</select>
					</span>
				</div>
			</fieldset>
	</div>
			
	<div class='col cTwo'>
			<fieldset class='other'>
				<legend>other rooms</legend>
				<div class='col-2-col-1'>
			
					<fieldset class='container'>
						<legend>master bed</legend>
						<span>
							<label for='mBedFloor'>Floor</label>
							<select name='mBedFloor' id='mBedFloor' class='four'>
								<option value=''></option>
								<option value='carpet'>Carpet</option>
								<option value='wood'>Wood</option>
							</select>
						</span>
						
						<span>
							<label for='mBedCloset'>Closet</label>
							<select name='mBedCloset' id='mBedCloset' class='four'>
								<option value='zero'></option>
								<option value='one'>Large WI</option>
								<option value='two'>Medium WI</option>
								<option value='three'>Small WI</option>
								<option value='four'>Non-WI</option>
							</select>
						</span>
					</fieldset>
					
					<fieldset class='container'>
						<legend>bedrooms</legend>
						<span>
							<label for='bedFloor'>Floor</label>
							<select name='bedFloor' id='bedFloor' class='four'>
								<option value=''></option>
								<option value='carpet'>Carpet</option>
								<option value='wood'>Wood</option>
							</select>
						</span>
						
						<span>
							<label for='bedCloset'>Closet</label>
							<select name='bedCloset' id='bedCloset' class='four'>
								<option value='zero'></option>
								<option value='one'>Large WI</option>
								<option value='two'>Medium WI</option>
								<option value='three'>Small WI</option>
								<option value='four'>Non-WI</option>
							</select>
						</span>
					</fieldset>
					
					<fieldset class='container'>
						<legend>master bath</legend>
						<span>
							<label for='mBathFloor'>Floor</label>
							<select name='mBathFloor' id='mBathFloor' class='four'>
								<option value=''></option>
								<option value='small'>Small</option>
								<option value='medium'>Medium</option>
								<option value='large'>Large</option>
							</select>
						</span>
						
						<span>
							<label for='mBathCloset'>Closet</label>
							<select name='mBathLinen' id='mBathLinen' class='four'>
								<option value=''></option>
								<option value='small'>Small</option>
								<option value='medium'>Medium</option>
								<option value='large'>Large</option>
							</select>
						</span>
					</fieldset>
					
					<fieldset>
						<legend>hallways</legend>
						<div class='hallOne container'>
							<span>
								<label for='hallOne'>Closet</label>
								<select name='hallOne' id='hallOne' class='four'>
									<option value=''></option>
									<option value='small'>Small</option>
									<option value='medium'>Medium</option>
									<option value='large'>Large</option>
								</select>
							</span>
	
							<span>
								<label for='hallTwo'>Closet</label>
								<select name='hallTwo' id='hallTwo' class='four'>
									<option value=''></option>
									<option value='small'>Small</option>
									<option value='medium'>Medium</option>
									<option value='large'>Large</option>
								</select>
							</span>
						</div>
					
						<div class='hallTwo container'>
							<span>
								<label for='hallThree'>Closet</label>
								<select name='hallThree' id='hallThree' class='four'>
									<option value=''></option>
									<option value='small'>Small</option>
									<option value='medium'>Medium</option>
									<option value='large'>Large</option>
								</select>
							</span>
	
							<span>
								<label for='hallFour'>Closet</label>
								<select name='hallFour' id='hallFour' class='four'>
									<option value=''></option>
									<option value='small'>Small</option>
									<option value='medium'>Medium</option>
									<option value='large'>Large</option>
								</select>
							</span>
						</div>
					</fieldset>
					
					<fieldset class='container'>
						<legend>fence</legend>
						
						<span>
							<label for='fenceType'>type of fence</label>
							<select name='fenceType' id='fenceType' class='thirteen'>
								<option value='zero'></option>
								<option value='one'>Partial Fence</option>
								<option value='two'>Full Fence</option>
								<option value='three'>Partial Privacty Fence</option>
								<option value='four'>Full Privacty Fence</option>
							</select>
						</span>
					</fieldset>
				</div>
				
				<div class='col-2-col-2'>
					<fieldset class='container laundry'>
						<legend>laundry</legend>
						<span>
							<label for='lRoom'>Laundry Room</label>
							<select name='lRoom' id='lRoom' class='ten'>
								<option value='zero'></option>
								<option value='one'>Washer/Dryer Space</option>
								<option value='two'>Some Storage</option>
								<option value='three'>Full Room</option>
							</select>
						</span>
						
						<span>
							<label for='lStorage'>Storage</label>
							<select name='lStorage' id='lStorage' class='six'>
								<option value='zero'></option>
								<option value='one'>Small</option>
								<option value='two'>Medium</option>
								<option value='three'>Large</option>
							</select>
						</span>
						
						<span>
							<label for='lLeve'>Level</label>
							<select name='lLevel' id='lLevel' class='two'>
								<option value=''></option>
								<option value='one'>1</option>
								<option value='two'>B</option>
							</select>
						</span>
					</fieldset>
					
					<fieldset class='container kit'>
						<legend>kitchen</legend>
						<span>
							<label for='cabSpace'>cabinet space</label>
							<select name='cabSpace' id='cabSpace' class='nine'>
								<option value=''></option>
								<option value='one'>Little</option>
								<option value='two'>Small</option>
								<option value='three'>Medium</option>
								<option value='four'>Large</option>
								<option value='five'>Ample</option>
							</select>
						</span>

						<span>
							<label for='pantry'>pantry</label>
							<select name='pantry' id='pantry' class='twelve'>
								<option value=''></option>
								<option value='one'>None</option>
								<option value='two'>Cabinet</option>
								<option value='three'>Large Cabinet</option>
								<option value='four'>Walkin</option>
								<option value='five'>Large Walkin</option>
							</select>
						</span>
					</fieldset>

					<div class='block checkbox'> 						
						<div class='row'>	
							<span>
								<input type='hidden' name='den' value='no' />
								<input type='checkbox' name='den' value='yes' id='den' />
								<label for='den'><span></span>Den</label>
							</span>
								
							<span>
								<input type='hidden' name='rec' value='no' />
								<input type='checkbox' name='rec' value='yes' id='rec' />
								<label for='rec'><span></span>Rec</label>
							</span>

							<span>
								<input type='hidden' name='mud' value='no' />
								<input type='checkbox' name='mud' value='yes' id='mud' />
								<label for='mud'><span></span>Mud</label>
							</span>
							
							<span>
								<input type='hidden' name='sun' value='no' />
								<input type='checkbox' name='sun' value='yes' id='sun' />
								<label for='sun'><span></span>Sun</label>
							</span>
						</div>
						
						<div class='row'>
							<span>
								<input type='hidden' name='office' value='no' />
								<input type='checkbox' name='office' value='yes' id='office' />
								<label for='office'><span></span>Office</label>
							</span>
								
							<span>
								<input type='hidden' name='fireplace' value='no' />
								<input type='checkbox' name='fireplace' value='yes' id='fireplace' />
								<label for='fireplace'><span></span>Fireplace</label>
							</span>

							<span>
								<input type='hidden' name='fridge' value='no' />
								<input type='checkbox' name='fridge' value='yes' id='fridge' />
								<label for='fridge'><span></span>Fridge</label>
							</span>
						</div>
							
						<div class='row'>
							<span>
								<input type='hidden' name='oven' value='no' />
								<input type='checkbox' name='oven' value='yes' id='oven' />
								<label for='oven'><span></span>Oven</label>
							</span>
								
							<span>
								<input type='hidden' name='oRange' value='no' />
								<input type='checkbox' name='oRange' value='yes' id='oRange' />
								<label for='range'><span></span>Range</label>
							</span>
								
							<span>
								<input type='hidden' name='disposal' value='no' />
								<input type='checkbox' name='disposal' value='yes' id='disposal' />
								<label for='disposal'><span></span>Disposal</label>
							</span>
						</div>
						
						<div class='row'>							
							<span>
								<input type='hidden' name='dishwasher' value='no' />
								<input type='checkbox' name='dishwasher' value='yes' id='dishwasher' />
								<label for='dishwasher'><span></span>Dishwasher</label>
							</span>
								
							<span>
								<input type='hidden' name='breakfastBar' value='no' />
								<input type='checkbox' name='breakfastBar' value='yes' id='breakfastBar' />
								<label for='breakfastBar'><span></span>Breakfast Bar</label>
							</span>
						</div>
						
						<div class='row'>							
							<span>
								<input type='hidden' name='microwave' value='no' />
								<input type='checkbox' name='microwave' value='yes' id='microwave' />
								<label for='microwave'><span></span>Microwave</label>
							</span>
								
							<span>
								<input type='hidden' name='washer' value='no' />
								<input type='checkbox' name='washer' value='yes' id='washer' />
								<label for='washer'><span></span>Washer</label>
							</span>
								
							<span>
								<input type='hidden' name='dryer' value='no' />
								<input type='checkbox' name='dryer' value='yes' id='dryer' />
								<label for='dryer'><span></span>Dryer</label>
							</span>
						</div>
						
						<div class='row'>							
							<span>
								<input type='hidden' name='pool' value='no' />
								<input type='checkbox' name='pool' value='yes' id='pool' />
								<label for='pool'><span></span>Pool</label>
							</span>
								
							<span>
								<input type='hidden' name='hTub' value='no' />
								<input type='checkbox' name='hTub' value='yes' id='hTub' />
								<label for='hTub'><span></span>Hot Tub</label>
							</span>
								
							<span>
								<input type='hidden' name='deck' value='no' />
								<input type='checkbox' name='deck' value='yes' id='deck' />
								<label for='deck'><span></span>Deck</label>
							</span>
						</div>
						
						<div class='row'>							
							<span>
								<input type='hidden' name='ha' value='no' />
								<input type='checkbox' name='ha' value='yes' id='ha' />
								<label for='ha'><span></span>Homeowners Association</label>
							</span>
						</div>
					</div>
					
					<fieldset class='container'>
						<legend>school</legend>
						<span>
							<label for='gradeschool'>Grade</label>
							<select name='gradeschool' id='gradeschool' class='two'>
								<option value=''></option>
								<option value='1'>1</option>
								<option value='2'>2</option>
								<option value='3'>3</option>
								<option value='4'>4</option>
								<option value='5'>5</option>
								<option value='6'>6</option>
								<option value='7'>7</option>
								<option value='8'>8</option>
								<option value='9'>9</option>
								<option value='10'>10</option>									
							</select>
						</span>

						<span>
							<label for='midschool'>mid</label>
							<select name='midschool' id='midschool' class='two'>
								<option value=''></option>
								<option value='1'>1</option>
								<option value='2'>2</option>
								<option value='3'>3</option>
								<option value='4'>4</option>
								<option value='5'>5</option>
								<option value='6'>6</option>
								<option value='7'>7</option>
								<option value='8'>8</option>
								<option value='9'>9</option>
								<option value='10'>10</option>									
							</select>
						</span>

						<span>
							<label for='highschool'>high</label>
							<select name='highschool' id='highschool' class='two'>
								<option value=''></option>
								<option value='1'>1</option>
								<option value='2'>2</option>
								<option value='3'>3</option>
								<option value='4'>4</option>
								<option value='5'>5</option>
								<option value='6'>6</option>
								<option value='7'>7</option>
								<option value='8'>8</option>
								<option value='9'>9</option>
								<option value='10'>10</option>									
							</select>
						</span>
					</fieldset>
				</div>
			</fieldset>
	</div>
		
	<div class='col cThree'>
		<div>
			<fieldset class='imgUpload'>
				<legend>image upload</legend>
				" , imgUpload() , "
			</fieldset>
		</div>
		
		<div>
			<fieldset class='notes'>
				<legend>notes</legend>
				<textarea cols='40' rows='8' name='notes' id='notes'>
				</textarea>
			</fieldset>
		</div>
		
		<div>
			<fieldset class='misc container'>
				<legend>misc</legend>
				
				<span>
					<label for='distance'>dist.'</label>
					<input type='text' name='distance' id='distance' class='two' />
				</span>
				
				<span>
					<label for='propTax'>prop tax</label>
					<input type='text' name='propTax' id='propTax' class='six' />
				</span>
				
				<span>
					<label for='daysOnMarket'>days</label>
					<input type='text' name='daysOnMarket' id='daysOnMarket' class='two' />
				</span>
				
				<span>
					<label for='heat'>heat</label>
					<input type='text' name='heat' id='heat' class='five' />
				</span>
			</fieldset>
		</div>
	</div>
		";
           
		break;

        case 'edit':
            echo "
			<a href='pictureUpload.php?priKey=", urlencode($_GET['priKey']), "' target='new'>Add Pictures</a>
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
	
						<select name='kitchenCounter' id='kitchenCounter' value='" . $info['kitchenCounter'] . "' >
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
            if ($info['dishwasher'] == 'yes') {
                echo "<input type='checkbox' name='dishwasher' value='yes' id='dishwasher' placeholder='Dishwasher' checked/>";
            } else {
                echo "<input type='checkbox' name='dishwasher' value='yes' id='dishwasher' placeholder='Dishwasher' />";
            }
            echo "
				</span>
				
				<span>
					<label for='fridge'>Refridgerator</label>
					<input type='hidden' name='fridge' value='no' />
					";
            if ($info['fridge'] == 'yes') {
                echo "<input type='checkbox' name='fridge' value='yes' id='fridge' placeholder='Fridge' checked/>";
            } else {
                echo "<input type='checkbox' name='fridge' value='yes' id='fridge' placeholder='Fridge' />";
            }
            echo "
				</span>
				
				<span>
					<label for='oven'>Oven</label>
					<input type='hidden' name='oven' value='no' />
					";
            if ($info['oven'] == 'yes') {
                echo "<input type='checkbox' name='oven' value='yes' id='oven' placeholder='Oven' checked/>";
            } else {
                echo "<input type='checkbox' name='oven' value='yes' id='oven' placeholder='Oven' />";
            }
            echo "
				</span>
				
				<span>
					<label for='oRange'>Range</label>
					<input type='hidden' name='oRange' value='no' />
					";
            if ($info['oRange'] == 'yes') {
                echo "<input type='checkbox' name='oRange' value='yes' id='oRange' placeholder='Range' checked/>";
            } else {
                echo "<input type='checkbox' name='oRange' value='yes' id='oRange' placeholder='Range' />";
            }
            echo "
				</span>
				
				<span>
					<label for='disposal'>Disposal</label>
					<input type='hidden' name='disposal' value='no' />
					";
            if ($info['disposal'] == 'yes') {
                echo "<input type='checkbox' name='disposal' value='yes' id='disposal' placeholder='Disposal' checked/>";
            } else {
                echo "<input type='checkbox' name='disposal' value='yes' id='disposal' placeholder='Disposal' />";
            }
            echo "
				</span>
				
				<span>
					<label for='microwave'>Microwave</label>
					<input type='hidden' name='microwave' value='no' />
					";
            if ($info['microwave'] == 'yes') {
                echo "<input type='checkbox' name='microwave' value='yes' id='microwave' placeholder='Microwave' checked/>";
            } else {
                echo "<input type='checkbox' name='microwave' value='yes' id='microwave' placeholder='Microwave' />";
            }
            echo "
				</span>
				
				<span>
					<label for='fireplace'>Fireplace</label>
					<input type='hidden' name='fireplace' value='no' />
					";
            if ($info['fireplace'] == 'yes') {
                echo "<input type='checkbox' name='fireplace' value='yes' id='fireplace' placeholder='Fireplace' checked/>";
            } else {
                echo "<input type='checkbox' name='fireplace' value='yes' id='fireplace' placeholder='Fireplace' />";
            }
            echo "
				</span>
				
				<span>
					<label for='breakfastBar'>Breakfast Bar</label>
					<input type='hidden' name='breakfastBar' value='no' />
					";
            if ($info['breakfastBar'] == 'yes') {
                echo "<input type='checkbox' name='breakfastBar' value='yes' id='breakfastBar' placeholder='Breakfast Bar' checked/>";
            } else {
                echo "<input type='checkbox' name='breakfastBar' value='yes' id='breakfastBar' placeholder='Breakfast Bar' />";
            }
            echo "
				</span>
				
				<span>
					<label for='washer'>Washer</label>
					<input type='hidden' name='washer' value='no' />
					";
            if ($info['washer'] == 'yes') {
                echo "<input type='checkbox' name='washer' value='yes' id='washer' placeholder='Washer' checked/>";
            } else {
                echo "<input type='checkbox' name='washer' value='yes' id='washer' placeholder='Washer' />";
            }
            echo "
				</span>
				
				<span>
					<label='dryer'>Dryer</label>
					<input type='hidden' name='dryer' value='no' />
					";
            if ($info['dryer'] == 'yes') {
                echo "<input type='checkbox' name='dryer' value='yes' id='dryer' placeholder='Dryer' checked/>";
            } else {
                echo "<input type='checkbox' name='dryer' value='yes' id='dryer' placeholder='Dryer' />";
            }
            echo "
				</span>
							
				<span>
					<label for='pool'>Pool</label>
					<input type='hidden' name='pool' value='no' />
					";
            if ($info['pool'] == 'yes') {
                echo "<input type='checkbox' name='pool' value='yes' id='pool' placeholder='Pool' checked/>";
            } else {
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
			";
            break;

        case 'remove':
            break;

        default:
            break;
    }


}
?>