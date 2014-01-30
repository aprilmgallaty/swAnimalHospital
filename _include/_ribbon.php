<?php
	function ribbonName($ribbonTitle){
		?>


<div class="ribbon-wrapper">
		<div class="ribbon-front">
			<h2><?php echo $ribbonTitle ?></h2>
		</div>
		<div class="ribbon-edge-topleft"></div>
		<div class="ribbon-edge-topright"></div>
		<div class="ribbon-edge-bottomleft"></div>
		<div class="ribbon-edge-bottomright"></div>
		<div class="ribbon-back-left"></div>
		<div class="ribbon-back-right"></div>
</div>
<?php
	}
?>