<!-- validated and passed as of 04/01/13 -->

<?php
	include "../_include/globals.php";
	$title = "Doctors";
	include INCLUDE_DIR . "_header.php";
	include INCLUDE_DIR . "_ribbon.php";
?>

	<?php ribbonName("The Doctors - <a href=\"" . FILES_URL . 'doctors.php' . "\">Dr. Burgess</a> and <a href=\"" . FILES_URL . 'doctors2.php' . "\">Dr. Surrency</a>") ?>
	
	

<section id="doctors2MainSection">
	

	<section id="burgessHeader">
		<aside id="burgess1">
			<img src="<?php echo IMG_URL . "03_doctors/ms1225x300.gif"; ?>" width="225" height="300" alt="Dr. Surrency" class="imgLoader" />
		</aside>
	
		<aside id="intro">
				<h2>Dr. Melinda Surrency</h2>
			
			<p>&bull; Dr. Melinda Surrency is a native Oregonian.</p>
			<p>&bull; Graduate of Oregon State University's College of Veterinary Medicine</p>
			<p>&bull; Completed multiple preceptorships at Audubon of Portland's Wildlife Care Center, the Oregon Zoo and Wildlife Safari.</p>
			<p>&bull; Dr. Surrency has experience with rabbits, guinea pigs, degu, rats, skunks, cats, dogs, fish and reptiles and many of these have been personal pets.</p>
			<p>&bull; Currently, she lives with one degu, one skunk and several cats.</p>
			<p>&bull; Dr. Surrency has a strong interest in internal medicine, pain management and surgery.</p>

		</aside>
	</section>	
		
		<div class="clear">&nbsp;</div>

</section>

<?php include INCLUDE_DIR . "_footer.php"; ?>