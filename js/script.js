// JavaScript Document

function visSwitch(page) {
  var pages = document.getElementById(page);
	
	if ( pages.style.visibility == 'visible')
	{
		pages.style.visibility = 'hidden';
		pages.style.display = 'none';
	}
	else
	{
		pages.style.visibility = 'visible';
		pages.style.display = 'block';
	}
}

function bathrooms()
{
	var baths = document.getElementById('baths').value;
	var bathroom = document.getElementById('bathroom');
	var html;
	var x = Array('A', 'B', 'C', 'D', 'E'); 
	
	for( var i = 0; i < baths; i++ )
	{
		html += printBath(x[i]);
	}
	
	bathroom.innerHTML = '<legend>bathroom</legend>' + html;
}

function printBath(x)
{
	var code = '<div class="container"> <span> <label for="bathFloor' + x + '">floor</label> <select name="bathFloor' + x + '" id="bathFloor' + x + '" class="six"> <option value=""></option> 						<option value="wood">Wood</option> <option value="linolium">Linolium</option> <option value="ceramic">Ceramic</option> <option value="stone">Stone</option> </select> 				</span> <span> <label for="bathCounter' + x + '">Vanity</label> <select name="bathCounter' + x + '" id="bathCounter' + x + '" class="six"> <option value=""></option> <option value="granite">Granite</option> <option value="formica">Formica</option> <option value="lq">Low Quality</option> </select> </span> <span> <label for="showerStall' + x + '">Shower Material</label> <select name="showerStall' + x + '" id="showerStall' + x + '" class="thirteen"> <option value=""></option> <option value="tile">Tile</option> <option value="fiberglass">Fiberglass</option> </select> </span> <span> <label for="bathStorage' + x + '">Storage</label> <select name="bathStorage' + x + '" id="bathStorage' + x + '" class="eleven"> <option value=""></option> <option value="small">Small</option> <option value="medium">Medium</option> <option value="large">Large</option> </select> </span> </div>';
	
	return code;
}
