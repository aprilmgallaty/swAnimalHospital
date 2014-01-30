

<?php
	include "../_include/globals.php";
	$title = "Contact";
	include INCLUDE_DIR . "_header.php";
	include INCLUDE_DIR . "_ribbon.php";
?>

<?php ribbonName("Contact Us"); ?>

<section id="contact">
			
	<form class="form-container" action="<?php echo FILES_URL . "processContactForm.php"; ?>" method="POST">
		<div class="form-title"><h2>Contact Us</h2></div>
		
		<div class="form-title">Name<span class="required">&nbsp;*</span></div>
			<input class="form-field" type="text" name="name" placeholder="Your Name" /><br />
		
		<div class="form-title">Email<span class="required">&nbsp;*</span></div>
			<input class="form-field" type="email" name="email" placeholder="name@host.com" /><br />
		
		<div class="form-title">Phone Number<span class="required">&nbsp;*</span></div>
			<input class="form-field" type="tel" name="phone" placeholder="123-456-7890" /><br />
			
		<div class="form-title">Message<span for="comments" class="required">&nbsp;*</span></div>
			<textarea id="comments" rows="5" cols="25" name="message" placeholder="Your Message"></textarea>
		
		<div class="submit-container">
			<input class="submit-button" type="submit" value="Submit" />
		</div>
		
		<p><span class="required">&nbsp;*</span> are required fields</p>
	</form>

	<?php
		if(!empty($error)) { 
			print '<div class="error"><p class="required">'.$error.'</p></div>'; 
		}
		if(!empty($result)) { 
			print '<div class="result"><p>'.$result.'</p></div>'; 
		}
	?>
	
</section><!-- end contact -->

<section id="locateSection">
	
	<section id="map">

		<p>Use the map below to find <span class="important">Southwest Animal Hospital at 6139 SW Murray Blvd&#46;&#44; Beaverton, OR  97008</span></p>
		
		<iframe id="mapNormal" width="280" height="420" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=6139+SW+Murray+Blvd+|+Beaverton,+OR+97008&amp;aq=&amp;sll=45.481318,-122.540131&amp;sspn=0.036409,0.101194&amp;ie=UTF8&amp;hq=&amp;hnear=6139+SW+Murray+Blvd,+Beaverton,+Oregon+97007&amp;ll=45.475463,-122.826187&amp;spn=0.018206,0.050597&amp;t=m&amp;z=14&amp;output=embed">
		</iframe>

		<iframe id="mapMobile" width="280" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=6139+SW+Murray+Blvd+|+Beaverton,+OR+97008&amp;aq=&amp;sll=45.481318,-122.540131&amp;sspn=0.036409,0.101194&amp;ie=UTF8&amp;hq=&amp;hnear=6139+SW+Murray+Blvd,+Beaverton,+Oregon+97007&amp;ll=45.475463,-122.826187&amp;spn=0.018206,0.050597&amp;t=m&amp;z=14&amp;output=embed">
		</iframe>
			
		<br />
		<small>
			
		<a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=6139+SW+Murray+Blvd+|+Beaverton,+OR+97008&amp;aq=&amp;sll=45.481318,-122.540131&amp;sspn=0.036409,0.101194&amp;ie=UTF8&amp;hq=&amp;hnear=6139+SW+Murray+Blvd,+Beaverton,+Oregon+97007&amp;ll=45.475463,-122.826187&amp;spn=0.018206,0.050597&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left" target="_blank">View Larger Map
		</a>

		</small>
		
	</section><!-- end map -->

</section>

<?php include INCLUDE_DIR . "_footer.php"; ?>
