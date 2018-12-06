<div class="contactView">
	<h1>Contact Us</h1>
	<div class="contactClass">
		<div class="addressView">
			<div class="addressDetails">
				<h2>Address</h2>
				<p>123 Dallas, TX 70123</p>

				<h2>Email</h2>
				<p>info@floppwdawg.com</p>

				<h2>FAQ Info</h2>
				<p>Here is a list of some Frequently Asked Questions.</p>
			</div><!--addressDetails-->
		</div><!--addressView-->

		<div class="formDetails">
			<form method="post" onsubmit="return validate()">
				<label class="required">Enter Name</label>
				<input type="text" name="strName" id="strName" placeholder="Jane Doe" class="required" value="" required>
				<label class="required">Enter Email</label>
				<input type="text" name="strEmail" id="strEmail" placeholder="abc@gmail.com" class="required" value="" required>
				<label class="required">Enter Message</label>
				<textarea type="textarea" name="strMessage" id="strMessage" placeholder="Enter your message.." class="required" required></textarea>
				<input type="submit" name="submit" value="Submit" class="btn btn-primary">
			</form>
		</div><!--formDetails-->
		<div id="map"></div><!--map-->
	</div><!--contactClass-->
</div><!--ContactView-->