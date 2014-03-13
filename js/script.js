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
	var count = document.body.childNodes.length;
	var x = Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H');
	
	if ( count < baths )
	{
		var y = baths - count;

		
		for ( i = 0; i < y; ++i )
		{
		var input = document.createElement('div');
		input.innerHTML = "<span><label for='bathFloor" + x[i] + "'>floor</label><select name='bathFloor" + x[i] + "' id='bathFloor" + x[i] + "' class='six'><option value=''></option><option value='wood'>Wood</option><option value='linolium'>Linolium</option><option value='ceramic'>Ceramic</option><option value='stone'>Stone</option></select></span><span><label for='bathCounter" + x[i] + "'>Vanity</label><select name='bathCounter" + x[i] + "' id='bathCounter" + x[i] + "' class='six'><option value=''></option><option value='granite'>Granite</option><option value='formica'>Formica</option><option value='lq'>Low Quality</option></select></span><span><label for='showerStall" + x[i] + "'>Shower Material</label><select name='showerStall" + x[i] + "' id='showerStall" + x[i] + "' class='thirteen'><option value=''></option><option value='tile'>Tile</option><option value='fiberglass'>Fiberglass</option>						</select></span><span><label for='bathStorage" + x[i] + "'>Storage</label><select name='bathStorage" + x[i] + "' id='bathStorage" + x[i] + "' class='eleven'><option value=''></option><option value='small'>Small</option><option value='medium'>Medium</option>							<option value='large'>Large</option></select></span>";
	
		input.className += 'container';
		document.getElementById('bathroom').appendChild(input);
		}
	}          //6       2
	else if ( count > baths )
	{
		var z = count - baths;
		while ( z > baths )
		var temp = x[z];		
		var node = document.getElementById(bathroom);
		var lastChild = node.lastChild;
		node.removeChild(lastChild);
		--count;
	}	
}