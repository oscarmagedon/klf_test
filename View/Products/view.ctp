<h3>View product ID: <?php echo $product['Product']['prodID'] ?></h3>
<div class="detail-panel">
	<h4>General</h4>

	<div class="detail-field">
		<i>Number</i><br/>
		<strong><?php echo $product['Product']['prodNum'] ?></strong>
	</div>

	<div class="detail-field">
		<i>Name</i><br/>
		<strong><?php echo $product['Product']['prodName'] ?></strong>
	</div>

	<div class="detail-field">
		<i>Color</i><br/>
		<strong><?php echo $product['Colorprod']['colprodDesc'] ?></strong>
	</div>

	<div class="detail-field">
		<i>Region</i><br/>
		<strong><?php echo $product['Region']['regionName'] ?></strong>
	</div>

	<div class="detail-field">
		<i>Country</i><br/>
		<strong>
			<?php 
			if ( isset ($product['Region']['Country']))
				echo $product['Region']['Country']['CountryName'] 
			?>
		</strong>
	</div>

</div>
<div class="detail-panel">
	<h4>Details</h4>

	<div class="detail-field">
		<i>Package</i><br/>
		<strong><?php echo $product['Product']['prodPack'] ?></strong>
	</div>

	<div class="detail-field">
		<i>Format</i><br/>
		<strong><?php echo $product['Product']['prodFormat'] ?> ml </strong>
	</div>

	<div class="detail-field">
		<i>Quantity</i><br/>
		<strong><?php echo $product['Product']['prodQtyBuy'] ?></strong>
	</div>

	<div class="detail-field">
		<i>Date of Buy</i><br/>
		<strong><?php echo $product['Product']['prodDateBuy'] ?></strong>
	</div>

</div>

<div class="detail-panel">
	<h4>Prices</h4>
	
	<div class="detail-field">
		<i>Buy Price</i><br/>
		<strong><?php echo $product['Product']['prodPriceBuy'] ?></strong>
	</div>

	<div class="detail-field">
		<i>Label Charge</i><br/>
		<strong><?php echo $product['Product']['prodLabelCharge'] ?> ml </strong>
	</div>

	<div class="detail-field">
		<i>Bottle Charge</i><br/>
		<strong><?php echo $product['Product']['prodBottleCharge'] ?></strong>
	</div>

	<div class="detail-field">
		<i>Bot. Ch. per Person</i><br/>
		<strong><?php echo $product['Product']['prodBottleChargePerson'] ?></strong>
	</div>

	<div class="detail-field">
		<i>Sell Price</i><br/>
		<strong><?php echo $product['Product']['prodSellPrice'] ?></strong>
	</div>

</div>

<div style="clear: both">
	<hr>
</div>

