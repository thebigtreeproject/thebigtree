<section>
	<div class="testimonialTitle">
		<h1>Testimonial</h1>
	<?php foreach($arrData as $testimonial){ ?>
		<div>
			<p class="name">- <?=$testimonial['strFirstName']?> <?=$testimonial['strLastName']?>, <?=date('Y', $testimonial['nDateUTC'])?></p>
			<p>"<?=$testimonial['strTestimonial']?>"</p>
		</div>
	<?php } ?>
	</div>
	<form method='post' action="?route=testimonial.save">
		<label>Say something about us:</label>
		<input type="hidden" name="nUserID" value="<?=$_SESSION['user']['id']?>">
		<input type="hidden" name="nDate" value="<?=time()?>">
		<textarea name="strTestimonial" cols="30" rows="10"></textarea>
		<input class="btn btn-primary" type='submit' value='Submit Testimonial'>
	</form>	    
</section>

