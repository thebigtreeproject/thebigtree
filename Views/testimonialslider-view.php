<section class="testimslider">
    <h2>Testimonials</h2>
	<div class="testimonial-slider">
        <div class="slides-holder">
        <?php foreach($arrData as $testimonial){ ?>
            <div class="slides">
                <p class="name">- <?=$testimonial['strFirstName']?> <?=$testimonial['strLastName']?>, <?=date('Y', $testimonial['nDateUTC'])?></p>
                <p>"<?=$testimonial['strTestimonial']?>"</p>
            </div>
        <?php } ?>
        <span class="changeSlide next-slide"><i class="fas fa-angle-right"></i></span>
        <span class="changeSlide prev-slide"><i class="fas fa-angle-left"></i></span>
        </div>
    </div>
    <a href="./?route=pages.testimonials" class="btnlogin moretestimonial-btn">More Testimonials</a>   
</section>

