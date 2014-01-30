<!-- validated and passed as of 04/01/13 -->

<?php
	include "../_include/globals.php";
	$title = "Donate";
	include INCLUDE_DIR . "_header.php";
	include INCLUDE_DIR . "_ribbon.php";
?>

<?php ribbonName("Donate"); ?>

<section id="donateSection">
	
	<section id="donate">

		<p>Donations go towards research into exotic pet diseases.  We use such funds &hellip;</p>

			<ul>
				<li>To further medical knowledge about exotic pets, such as sending samples of tumors or other tissues to the lab when the owner can't afford to pay for pathology.</li>
				<li>For testing samples from deceased animals where owners can't afford to spend additional money for testing but allowing us to possibly gain insight into what disease they had.</li>
				<li>Donations are also used for research projects
				<li>Current Project:  Testing UV light sources for reptiles and testing different insect species for nutritional value as prey food items for reptiles</li>
			</ul>

	
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="donateButton">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" id="hosted_button_id" value="CSQGZ9FALLZ22">
		<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif"  name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="Paypal" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>

	</section><!-- end donate -->
</section>

<?php include INCLUDE_DIR . "_footer.php"; ?>
