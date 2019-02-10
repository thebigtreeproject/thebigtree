<section id="shipping-billing-container">
<div class="shippingForm float">
<h1 class="shipping-title">Shipping Information</h1>
	<form method="post" action="index.php?controller=checkout&action=payment" id="billingForm">
		<div class="shipping-holder">
			<label class="required" for="firstName">First Name</label>
			<input class="billingField" type="text" name="billingfirstName" id="billingfirstName" placeholder="Tyler">

			<label class="required" for="lastname">Last Name</label>
			<input class="billingField" type="text" name="billinglastname" id="billinglastname" placeholder="Smith">

			<label class="required" for="streetAddress">Street Address</label>
			<input class="billingField" type="text" name="billingstreetAdress" id="billingstreetAdress" placeholder="1234 Granville St">

			<label class="required" for="city">City</label>
			<input class="billingField" type="text" name="billingCity" id="billingCity" placeholder="Vancouver">

			<label class="required" for="country">Country</label>
			<input class="billingField" type="text" name="billingCountry" id="billingCountry" placeholder="Canada">
			
			<div class="floatStateZip">
				<label class="required" for="state">State/Province</label>
				<input class="billingField stateZip" type="text" name="billingStateProvince" id="billingStateProvince" placeholder="BC">
			</div><!--floatStateZip-->
			
			<div class="floatStateZip">
				<label class="required zipCode" for="zipCode">Zip Code:</label>
				<input class="billingField stateZip zipCode" type="text" name="billingzipCode" id="billingzipCode" placeholder="V5R 123">
			</div><!--floatStateZip-->

			<label class="required" for="email">Email Address</label>
			<input class="billingField" type="text" name="billingemail" id="billingemail" placeholder="tylersmith@gmail.com">
		</div><!--shipping-holder-->
	</form>

	<h1 class="billing-title">Billing Information</h1>

	<span>
		<input id="autoFill" type="checkbox" name="sameAsShipping" class="autoFill">
		<p>Same as shipping information</p>
	</span>
</div><!--shippingForm-->
	
<div class="billingForm float">
	<div class="shipping-holder">
		<label class="required" for="firstName">First Name</label>
		<input type="text" name="shippingfirstName" id="shippingfirstName" placeholder="Tyler">

		<label class="required" for="lastname">Last Name</label>
		<input type="text" name="shippinglastname" id="shippinglastname" placeholder="Smith">

		<label class="required" for="streetAdress">Street Address</label>
		<input type="text" name="shippingstreetAdress" id="shippingstreetAdress" placeholder="1234 Granville St">

		<label class="required" for="zipCode">Zip Code</label>
		<input type="text" name="shippingzipCode" id="shippingzipCode" placeholder="V5R 123">
	</div><!--shippingHolder-->

	<a href="#" class="btn btn-primary continue-to-payment" onclick="document.querySelector('#billingForm').submit();return false;">Continue to payment</a>

</div><!--billingForm-->
</section><!--shipping-billing-container-->