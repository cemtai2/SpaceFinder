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
	var bathArray = clean(Array.prototype.slice.call(bathroom.childNodes));
	var numBath = baths.value;
	var count = bathArray.length;
	var x = Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'); 
	alert('Baths: ' + baths + 'Count: ' + count);
	
	if ( count < baths )
	{
		alert( 'count is less than baths' );
		var y = baths - count;

		
		for ( i = 0; i < y; ++i )
		{
		var input = document.createElement('div');
		input.innerHTML = "<span><label for='bathFloor" + x[i] + "'>floor</label><select name='bathFloor" + x[i] + "' id='bathFloor" + x[i] + "' class='six'><option value=''></option><option value='wood'>Wood</option><option value='linolium'>Linolium</option><option value='ceramic'>Ceramic</option><option value='stone'>Stone</option></select></span><span><label for='bathCounter" + x[i] + "'>Vanity</label><select name='bathCounter" + x[i] + "' id='bathCounter" + x[i] + "' class='six'><option value=''></option><option value='granite'>Granite</option><option value='formica'>Formica</option><option value='lq'>Low Quality</option></select></span><span><label for='showerStall" + x[i] + "'>Shower Material</label><select name='showerStall" + x[i] + "' id='showerStall" + x[i] + "' class='thirteen'><option value=''></option><option value='tile'>Tile</option><option value='fiberglass'>Fiberglass</option>						</select></span><span><label for='bathStorage" + x[i] + "'>Storage</label><select name='bathStorage" + x[i] + "' id='bathStorage" + x[i] + "' class='eleven'><option value=''></option><option value='small'>Small</option><option value='medium'>Medium</option>							<option value='large'>Large</option></select></span>";
	
		input.className += 'container';
		document.getElementById('bathroom').appendChild(input);
		}
	}          //6       2
	
	if ( count > baths )
	{
		alert('count is greater than baths');
		var z = count - baths;
		while ( z > baths )
		{
			var last = bathroom.lastChild;
			alert(last);
			-z;
		}
	}	
}

function clean(x)
{
	for (var i = 0; i < x.length; i++ )
	{
		if(x[i].innerHTML == undefined || x[i].innerHTML == 'bathroom')
		{
			x.splice(i,1);
			--i;
		}
	}
	
	return x;
}
