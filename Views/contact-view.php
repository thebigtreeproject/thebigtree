<div class="contactView">
	<h1>Contact Us</h1>
	<div>
		<form method="post" onsubmit="return validate()">
			<label class="required">Enter Name</label>
			<input type="text" name="strName" id="strName" placeholder="Jane Doe" value="">
			<label class="required">Enter Email</label>
			<input type="text" name="strEmail" id="strEmail" placeholder="abc@gmail.com" value="">
			<label class="required">Enter Message</label>
			<textarea name="strMessage" id="strMessage" placeholder="Enter your message.."></textarea>
			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		</form>
		<div id="map"></div><!--map-->
	</div><!--contactClass-->
</div><!--ContactView-->