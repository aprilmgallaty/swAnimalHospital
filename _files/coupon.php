<!-- validated and passed as of 04/01/13 -->

<?php
	include "../_include/globals.php";
	$title = "First Time Client Coupon";
	include INCLUDE_DIR . "_header.php";
	include INCLUDE_DIR . "_ribbon.php";
?>

<?php ribbonName("First Time Client Coupon"); ?>

<section class="mainSection">

<div id="coupon">

				<img src="<?php echo IMG_URL . "01_main/coupon269x300.jpg"; ?>" width="251" height="300" alt="Coupon" id="webCoupon" class="imgLoader" />
				<img src="<?php echo IMG_URL . "01_main/printCoupon469x549.jpg"; ?>" width="469" height="549" alt="Printable Coupon" id="printCoupon" />
				
				
				<hgroup>
					<h4>Southwest Animal Hospital</h4>
					<h5>First Time Client Coupon</h5>
				</hgroup>
			
				<p>With this coupon&#44; new clients will receive a <span id="percent">15&#37;</span> discount on their pet&#39;s first examination&#46;</p>
				<h6><span class="bold">Conditions Apply:&nbsp;</span>The client must be new to this hospital and schedule their appointment prior to their arrival&#46;  Discount is on the price of the exam only and will not apply to additional services or supplies&#46; </h6>
				<p id="call">Call 503&#45;643&#45;2137 to schedule your appointment&#46; 
				
			</div> <!-- end #coupon -->
			
			<p id="print"><a href="#" onclick="window.print(); return false;">Print</a></p>
		
		
</section>



<?php include INCLUDE_DIR . "_footer.php"; ?>
