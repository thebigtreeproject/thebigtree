<section class="secondHero" id="contact">
	<div></div>
	<div>
		<h1>Contact Us</h1>
		
		<div id="contactForm">
            <div id="info">
			<p>(604) 555 5555</p>
		    <p>thebigtree@thebigtree.com</p>
		    <p>570 Dunsmuir St., Vancouver, BC</p>
		</div><!--endinfo-->
                
			<form method="post" onsubmit="return validate()">
				<label class="requiredLabel">Full Name: </label>
				<input type="text" name="strFullName" placeholder="Enter your full name" class="requiredField" id="fullname" value="" required/"><br/>
				<label class="requiredLabel">Email Address:</label>
				<input type="email" name="strEmailAddress" placeholder="Enter your email address" class="requiredField" id="emailAddress" value="" required/><br/>
				<label class="requiredLabel">Message:</label>
				<textarea name="strMessage" id="message" value="" required/></textarea>
				<input type="submit" onClick="validateForm()" name="Submit" class="contactbtn" value="Submit"/>
			</form><!--endform-->
		</div><!--endcontactForm-->
	</div>
</section>
