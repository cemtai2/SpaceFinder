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