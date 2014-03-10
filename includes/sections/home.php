    <section>
      <h2>Welcome to SpaceFinder!</h2>
      
      <p>
        SpaceFinder is an app designed to help you find a space to live based on criteria that you provide.  We've added as many criteria as we can think of - all you need to do is rate their importance to you and then enter your potential living spaces.  SpaceFinder will rank them accordingly.
      </p>
    </section>
    
    <section>
      <h2>How To: </h2>
      
      <ul>
        <li>Use our easy form to rate each criteria in order of importance to you.</li>
        <li>Add all the places that you are considering.</li>
        <li>COMPUTER MAGIC</li>
        <li>You now have a neat, ranked list of places!</li>
      </ul>
    </section>
    
	</div>
  
  <div class='submit'>
  	<?php 
			if($_SERVER['REQUEST_METHOD'] == "POST"  && $_POST['type'] == 'addNew')
			{
				processForm('add');
			}
			elseif($_SERVER['REQUEST_METHOD'] == "POST"  && $_POST['type'] == 'edit')
			{
				processForm('edit', $_POST['priKey']);
			}

		?>
  </div>
  
