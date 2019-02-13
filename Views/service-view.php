<section id="servicesection" class="<?=($_GET['route'] == 'pages.services')?'noBg':'applyBg';?>">
	<!--titleText-->
	<div class="title">
		<div class="title-text">
			<h1>Services</h1>
		</div>
		<div class="title-underline"></div>
	</div>
	<!--endtitle-->
	<div class="services-container">
<?php
	foreach($arrData['categories'] as $category){
?>

		<!--article-->
		<article class="service-item">
			<div class="front-text">
				<img src="icon/<?=$category['strIconFile']?>" alt="<?=$category['strIconDescription']?>">
				<h1><?=$category['strName']?></h1>
			</div>
			<div class="back-text">
				<h1><?=$category['strName']?></h1>
				<p><?=$category['strDescription']?></p>
				<a href=".?route=pages.category&catid=<?=$category['id']?>" class="servicebtn">Learn More</a>
			</div>
	   </article>
	   <!--endarticle-->
<?php } ?>

    </div>
    <!--endservicecontainer-->	   
</section>