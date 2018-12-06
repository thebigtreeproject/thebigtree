<section id="order-summary">
	<h1>Order Summary</h1>
	<?php foreach($arrData['productsSummary'] as $product){ ?>
	<div class="item-summary-holder">
		<div class="item-summary">
			<img src="assets/<?=$product['strFile']?>" class="item-preview">
		</div><!--item-summary-->

		<div class="item-summary">
			<p class="item-name"><?=$product['strName']?></p>
			<p class="item-price"><?=$product['nPrice']?></p>
			<p class="item-qty">Qty: <?=$product['nQuantity']?></p>
		</div><!--item-summary-->
	</div>
	<?php } ?>
	<div class="bottom-border">
	<img src="images/iconDottedLines.png" alt="iconDottedLines">
	</div><!--subtotal-summary-->

	<div class="subtotal-summary">
	<p>Subtotal (3 items)</p>
	</div><!--subtotal-summary-->

	<div class="subtotal-summary">
	<p class="float-right">$90.85</p>
	</div><!--subtotal-summary-->

	<div class="subtotal-summary">
	<p>Shipping</p>
	</div><!--subtotal-summary-->

	<div class="subtotal-summary">
	<p class="free float-right">Free</p>
	</div><!--subtotal-summary-->

	<div class="subtotal-summary">
	<p>Tax</p>
	</div><!--subtotal-summary-->

	<div class="subtotal-summary tax">
	<p class="float-right">$5.00</p>
	</div><!--subtotal-summary-->

	<div class="subtotal-summary">
	<p class="grand-total">Grand Total</p>
	</div><!--subtotal-summary-->

	<div class="subtotal-summary">
	<p class="grand-total float-right">$95.85</p>
	</div><!--subtotal-summary-->
</section><!--order-summary-->