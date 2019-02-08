<section>
	<div class="testimonialTitle">
		<h2>Testimonials</h2>
	<?php 
		//if there is no user loged the form will not show
		if(!empty($_SESSION['user']['id'])){
	?>
		<form method='post' action="?route=testimonial.save">
			<label>Say something about us:</label>
			<input type="hidden" name="nUserID" value="<?=$_SESSION['user']['id']?>">
			<input type="hidden" name="nDate" value="<?=time()?>">
			<textarea name="strTestimonial" cols="30" rows="10"></textarea>
			<input class="btn btn-primary" type='submit' value='Submit Testimonial'>
		</form>
	<?php
		}
		else if(empty($_SESSION['user']['id'])){
	?>
		<a href="./?route=pages.login" class="btn btn-primary">Join us and give your feed back</a>
	<?php
		}
		foreach($arrData as $testimonial){
	?>
		<div>
			<p class="name">- <?=$testimonial['strFirstName']?> <?=$testimonial['strLastName']?>, <?=date('Y', $testimonial['nDateUTC'])?></p>
			<p>"<?=$testimonial['strTestimonial']?>"</p>
		</div>
	<?php 
		}
	?>
	</div>
</section>

