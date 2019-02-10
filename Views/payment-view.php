<div class="paymentContainer">
		<div class="review-summary">
			<div class="shipping-billing-details">
				<h3>Shipping</h3>
				<p><?=$_SESSION['shippings']['strName']." ".$_SESSION['shippings']['strLastName']?></p>
				<p><?=$_SESSION['shippings']['strAddress']?></p>
				<p><?=$_SESSION['shippings']['strZipCode']?></p>
			</div><!--shippingSummary-->
			<div class="billingSummary">
				<h3>Billing</h3>
				<p>Same as Shipping</p>
			</div><!--shipping-billing-details-->
		</div><!--review-summary-->

<div class="paymentForm">
<h1 class="payment-title">Payment</h1>
<img src="assets/payment-options.png" alt="payment-options" class="payment-options">
	<form method="post" action="index.php?controller=checkout&action=">
		<div class="payment-holder">
			<label class="required">Card Number</label>
			<input class="billingField cardDots" type="text" name="cardNumber" id="paymentCardNumber" placeholder="&#x2022;&#x2022;&#x2022;&#x2022; &#x2022;&#x2022;&#x2022;&#x2022; &#x2022;&#x2022;&#x2022;&#x2022; &#x2022;&#x2022;&#x2022;&#x2022;">

			<label class="required">Name on card</label>
			<input class="billingField" type="text" name="nameOnCard" id="paymentNameOnCard" placeholder="Tyler Smith">

			<div class="floatExpiryCVV">
				<label class="required">Expiry Date</label>
				<input class="billingField expiryCVV" type="text" name="expiryDate" id="paymentExpiryDate" placeholder="MM/YY">
			</div><!--floatExpiryCVV-->
			
			<div class="floatExpiryCVV">
				<label class="required CVV">CVV (3 digits)</label>
				<input class="billingField expiryCVV CVV" type="text" name="CVV" id="paymentCVV" placeholder="&#x2022;&#x2022;&#x2022;">
			</div><!--floatExpiryCVV-->
		</div><!--payment-holder-->
	</form>

	<a href="index.php?action=thankyou" class="btn btn-primary complete-order">Complete Order</a>
</div><!--paymentForm-->
</div><!--paymentContainer-->