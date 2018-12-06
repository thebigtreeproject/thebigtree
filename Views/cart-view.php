	<h2 class="cart-title">Your Cart</h2>
	<?php if($arrData){ ?>
	<form class="cart-form" method="post" action="submit-order.php">
		<div class="cart-resume">
			<table id="cartTable" class='table'>
				<thead>
					<tr>
						<th>Product</th>
						<th>Name</th>
						<th>Unit</th>
						<th>Quantity</th>
						<th>Total</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
				<?=$arrData;?>
				</tbody>
			</table>
		</div><!--cart-resume-->

		<div class="continue-shopping">
			<a href="index.php?action=products" class="btn btn-secondary">Continue Shopping</a>
		</div><!--continue-shopping-->

		<div class="subtotal">
			<p class="subtotal-price">Subtotal: $90.95</p>
			<p class="free-shipping">Free shipping</p>
		</div><!--subtotal-->

		<div class="cart-bottom-btns">
			<img src="assets/trust-signs.png" alt="trust-signs" class="trust-signs">

			<a href="index.php?controller=checkout&action=billing" class="btn btn-primary checkout">Check Out</a>

			<a href="#">
				<img src="assets/paypal.png" alt="paypal" class="paypal">
			</a>
		</div><!--cart-bottom-btns-->
	</form>

	<?php }
	else { ?>
		<h3>No products in the cart</h3>	
		<div class="btn btn-secondary">
			<a href="index.php?action=products">Continue Shopping</a>
		</div>
	<?php } ?>