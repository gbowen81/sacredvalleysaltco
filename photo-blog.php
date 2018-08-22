<?php
 // meta array = overwrite this in each page
 $meta['author']      =  "Sacred Valley Salt Co.";
 $meta['title']       =  "Sacred Valley Salt Co. - Artisanal Finishing Salt from Peru's Sacred Valley";
 $meta['description'] =  "Fine finishing salt from historic Salineras de Maras. All natural with no additives. Handmade packaging. Good Salt. 100% Responsible. 0% Hype.";
 ?>
<?php include 'svsinc/svsheader.php'; ?>

<div class="layout-container bg-cloth">
	<div class="layout-grid">
	<a id="fair-trade" href="#">
	<?php echo file_get_contents("assets/images/better-than-fair-trade.svg"); ?>
	<h3>What does this mean? Find out.</h3>
	</a>
	</div>
</div>

<div class="layout-container bg-cloth">
	<div class="layout-grid">
		<a id="fair-trade" href="#">
			<?php echo file_get_contents("assets/images/better-than-fair-trade.svg"); ?>
			<h3>What does this mean? Find out.</h3>
		</a>
	</div>
</div>

<?php include('svsinc/svsfooter.php'); ?>


</html>