<?php
function add ()
{
	echo "
		<div class='addNew'>
			<form id='addNew' action='index.php' class='addNewForm' method='post'>
			";
	printForm('add');
	
	echo "
		<input type='hidden' name='type' id='type' value='addNew' />
	</form>
</div>";  
}


?>