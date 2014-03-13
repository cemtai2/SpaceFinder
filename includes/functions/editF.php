<?php
//Calls the printForm functions with the parameter 'edit'.  Function located at includes/functions/printFormF.php
function edit ()
{
	mysql_connect("localhost","kendramo_spf","DbmHvhw3")
	or die(mysql_error());
	
	mysql_select_db("kendramo_spacefinder") 
	 or die(mysql_error());
	 
	if(isset($_GET['priKey']))
	{	
		$priKey = $_GET['priKey'];
	 	 
		$data = mysql_query("SELECT * FROM space WHERE priKey = '" . $priKey . "'")
	 	or die(mysql_error());
		
		echo "<h2>Edit</h2>", 
		
	 	"<form id='edit' action='index.php' method='post' enctype='multipart/form-data'>";

	
		$info = mysql_fetch_array( $data );
		
		printForm('edit', $info);		
		echo "<input type='hidden' value='", $priKey,"' name='priKey' id='priKey' />",
		"<button type='submit'>Save</button>",
		"</form>",
	  "</div>";
	}	
}

/*
function edit() {
  //mysql_connect("localhost", "kendramo_spf", "DbmHvhw3")
              mysql_connect("localhost","root","")
            or die(mysql_error());

    //mysql_select_db("kendramo_spacefinder")
            mysql_select_db("kendramo_spacefinder") 
            or die(mysql_error());
    if (isset($_GET['priKey'])) {
        $priKey = $_GET['priKey'];

        $data = mysql_query("SELECT * FROM space WHERE priKey = '" . $priKey . "'") or die(mysql_error());

        echo "<h2>Edit</h2>",
        "<form id='edit' action='index.php' method='post' enctype='multipart/form-data'>";


        $info = mysql_fetch_array($data);


        echo "<input type='hidden' value='", $priKey, "' name='priKey' id='priKey' />",
        "<button type='submit'>Save</button>",
        "</form>",
        "</div>";
        printForm('edit', $info);
    }

    //unset($priKey, $data, $info);
}*/
?>

