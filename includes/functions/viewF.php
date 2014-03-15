<?php
//This function outputs all data on a single entry.  Was functioning in v.01, but hasn't been tested since.  Probably won't work.
function viewPage($info) {
    $priKey = $_GET['priKey'];
    echo "	
	<div class='contentDiv view'>	
		<div class='col1'>		
			<h1 class='title'>", $info['street'], " ", $info['city'], " $", $info['price'], " <a href='edit.php?priKey=", urlencode($priKey), "'>Edit</a></h1> 
			<div class='basics'>
				<span class='labels'>basics</span>
				<span>Levels: </span>
				<span>Rooms: </span>
				<span>Bedrooms: </span>
				<span>Bathrooms: </span>
				<span>Age: </span>
				<span>Lot: </span>
				<span>Distance: </span>
				<span>Total SqFt: </span>
				<span>Finished SqFt: </span>
				<span>UnFin SqFt: </span>
			</div>
			
			<div class='bedrooms'>
				<span class='labels'>bedrooms</span>
			</div>
			
			<div class='storage'>
				<span class='labels'>storage</span>
			</div>
			
			<div class='bathrooms'>
				<span class='labels'>bathrooms</span>
			</div>
			
			<div class='kitchen'>
				<span class='labels'>kitchen</span>
			</div>
		</div>
		
		<div class='col2'>
			<div class='imgGal'>
				<div class='mainImg'>
				</div>
				
				<div class='thumbs'>
				</div>
			</div>
			
			<div class='outdoors'>
				<span class='labels'>outdoors</span>
			</div>
			
			<div class='basement'>
				<span class='labels'>basement</span>
			</div>
		</div>
	</div>
";
}
