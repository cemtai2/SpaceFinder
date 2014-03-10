<?php

function viewPage($info) {
    $priKey = $_GET['priKey'];
    echo "	
	<div class='contentDiv'>	
		<h2>", $info['street'], " ", $info['city'], " <a href='edit.php?priKey=", urlencode($priKey), "'>Edit</a></h2> 
		
		<div class='bSec price'>
			Price: $", number_format($info['price']), "
		</div>
		
		<div class='bSec levels'>
			Levels: ", $info['levels'], "
		</div>
		
		<div class='bSec beds'>
			Beds: ", $info['beds'], "
		</div>
		
		<div class='bSec baths'>
			Baths: ", $info['baths'], "
		</div>
		
		<div class='bSec rooms'>
			Rooms: ", $info['rooms'], "
		</div>
		
		<div class='bSec basement'>
			Basement: ", $info['basement'], "
		</div>
		
		<div class='bSec sqftTotal'>
		  Total Sqft: ", $info['sqftTotal'], "
		</div>
		
		<div class='bSec sqftFin'>
			Finished Sqft: ", $info['sqftFin'], "
		</div>
		
		<div class='bSec sqftUnFin'>
			Unfinished Sqft: ", $info['sqftUnFin'], "
		</div>
		
		<div class='bSec distance'>
			Distance: ", $info['distance'], "
		</div>
		
		<div class='bSec propTax'>
			PropTax: ", $info['propTax'], "
		</div>
		
		<div class='bSec age'>
			Age: ", $info['age'], "
		</div>
		
		<div class='bSec lot'>
			Lot: ", $info['lot'], "
		</div>
		
		<div class='bSec ha'>
			Homeowners Association: ", $info['ha'], "
		</div>
		
		<div class='bSec fence'>
			Fence: ", $info['fence'], "
		</div>
		
		<div class='bSec cooling'>
			Cooling: ", $info['cooling'], "
		</div>
		
		<div class='bSec dishwasher'>
			Dishwasher: ", $info['dishwasher'], "
		</div>
		
		<div class='bSec fridge'>
			Fridge: ", $info['fridge'], "			
		</div>
		
		<div class='bSec oven'>
			Oven: ", $info['oven'], "
		</div>
		
		<div class='bSec disposal'>
			Disposal: ", $info['disposal'], "
		</div>
		
		<div class='bSec microwave'>
			Microwave: ", $info['microwave'], "
		</div>
		
		<div class='bSec ha_fee'>
			Homeowners Association Fee: ", $info['ha_fee'], "
		</div>
		
		<div class='bSec fireplace'>
			Fireplaces: ", $info['fireplace'], "
		</div>
		
		<div class='bSec garageSize'>
		Garage Size: ", $info['garageSize'], "
		</div>
		
		<div class='bSec breakfastBar'>
			Breakfast Bar: ", $info['breakfastBar'], "
		</div>
		
		<div class='bSec washer'>
			Washer: ", $info['washer'], "
		</div>
		
		<div class='bSec dryer'>
			Dryer: ", $info['dryer'], "
		</div>
		
		<div class='bSec heat'>
			Heating: ", $info['heat'], "
		</div>
		
		<div class='bSec laundry'>
			Laundry Room: ", $info['laundry'], "
		</div>
		
		<div class='bSec pool'>
			Pool: ", $info['pool'], "
		</div>
		
		<div class='bSec gradeschool'>
			Gradeschool: ", $info['gradeschool'], "
		</div>
		
		<div class='bSec midschool'>
			Middleschool: ", $info['midschool'], "
		</div>
		
		<div class='bSec highschool'>
			Highschool: ", $info['highschool'], "
		</div>
		
		<div class='bSec oRange'>
			Range: ", $info['oRange'], "
		</div>
		
		<div class='bSec typeKitchen'>
			Type of Kitchen: ", $info['typeKitchen'], "
		</div>
		
		<div class='bSec kitchenFloor'>
			Kitchen Floor: ", $info['kitchenFloor'], "
		</div>
		
		<div class='bSec kitchenCabinets'>
			Kitchen Cabinets: ", $info['kitchenCabinets'], "
		</div>
			
		<div class='bSec kitchenSink'>
			Kitchen Sink: ", $info['kitchenSink'], "
		</div>
		
		<div class='bSec bathFloor'>
			Bathroom Floor: ", $info['bathFloor'], "
		</div>
		
		<div class='bSec bathCounter'>
			Bathroom Vanity: ", $info['bathCounter'], "
		</div>
		
		<div class='bSec showerStall'>
			Shower Stall: ", $info['showerStall'], "
		</div>
		
		<div class='bSec basementFloor'>
			Basement Floor: ", $info['basementFloor'], "
		</div>
		
		<div class='bSec basementWalls'>
			Basement Walls: ", $info['basementWalls'], "
		</div>
		
		<div class='bSec familyFloor'>
			Family Room Floor: ", $info['familyFloor'], "
		</div>
		
		<div class='bSec bedFloor'>
			Bedroom Floor: ", $info['bedFloor'], "
		</div>
		
		<div class='bSec fenceType'>
			Fence Type: ", $info['fenceType'], "
		</div>
		
		<div class='bSec daysOnMarket'>
			Days on the Market: ", $info['daysOnMarket'], "
		</div>
		
		<div class='bSec rating'>
			Rating: ", $info['rating'], "
		</div>
		
		<div class='bSec kitchenCounter'>
			Kitchen Counters: ", $info['kitchenCounter'], "
		</div>
		
		<div class='clearfix'>
		</div>
		
		";

    echo "
		<!-- IMAGE GALLERY GOES HERE 
		all the files that are displayed via the loop below need to be in the 
		image gallery.  Only place they should be displayed is here. -->
		";
    /** 	$dir = 'images/uploads/' . $_GET['priKey'];

      $directory = $dir;

      $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

      while($it->valid())
      {
      if(!$it->isDot())
      {
      echo '<img src="', $it->key(), '" /><br />';
      }

      $it->next();
      }
     * */
    ?>


    <div id="fileupload" >

        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">

            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
    </div>
    <br>

    </div>


    <!-- The blueimp Gallery widget -->
    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>




    <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
        <td>
        <span class="preview"></span>
        </td>
        <td>
        <p class="name">{%=file.name%}</p>
        <strong class="error text-danger"></strong>
        </td>
        <td>
        <p class="size">Processing...</p>
        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
        {% if (!i && !o.options.autoUpload) { %}
        <button class="btn btn-primary start" disabled>
        <i class="glyphicon glyphicon-upload"></i>
        <span>Start</span>
        </button>
        {% } %}
        {% if (!i) { %}
        <button class="btn btn-warning cancel">
        <i class="glyphicon glyphicon-ban-circle"></i>
        <span>Cancel</span>
        </button>
        {% } %}
        </td>
        </tr>
        {% } %}
    </script>


    <!-- The template to display files available for download -->
    <script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        sdfg
        <tr class="template-download fade">
        <td>
        <span class="preview">
        {% if (file.thumbnailUrl) { %}
        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
        {% } %}
        </span>
        </td>
        <td>
        <p class="name">
        {% if (file.url) { %}
        <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
        {% } else { %}
        <span>{%=file.name%}</span>
        {% } %}
        </p>
        {% if (file.error) { %}
        <div><span class="label label-danger">Error</span> {%=file.error%}</div>
        {% } %}
        </td>
        <td>
        <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>



        </td>
        </tr>
        {% } %}
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="js/vendor/jquery.ui.widget.js"></script>
    <!-- The Templates plugin is included to render the upload/download listings -->
    <script src="http://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
    <script src="http://blueimp.github.io/JavaScript-Load-Image/js/load-image.min.js"></script>
    <!-- The Canvas to Blob plugin is included for image resizing functionality -->
    <script src="http://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
    <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <!-- blueimp Gallery script -->
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="js/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="js/jquery.fileupload.js"></script>
    <!-- The File Upload processing plugin -->
    <script src="js/jquery.fileupload-process.js"></script>
    <!-- The File Upload image preview & resize plugin -->
    <script src="js/jquery.fileupload-image.js"></script>
    <!-- The File Upload audio preview plugin -->
    <script src="js/jquery.fileupload-audio.js"></script>
    <!-- The File Upload video preview plugin -->
    <script src="js/jquery.fileupload-video.js"></script>
    <!-- The File Upload validation plugin -->
    <script src="js/jquery.fileupload-validate.js"></script>
    <!-- The File Upload user interface plugin -->
    <script src="js/jquery.fileupload-ui.js"></script>
    <!-- The main application script -->
    <script src="js/main.js"></script>
    <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
    <!--[if (gte IE 8)&(lt IE 10)]>
    <script src="js/cors/jquery.xdr-transport.js"></script>
    <![endif]-->





    <?php
    echo "</div>
	";
}
