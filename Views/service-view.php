<section>
<div class="service">
		<h1>Services</h1>
		<div class="icontop">
			<div>
				<img src="icon/coaster.png" alt="rollercoaster icon">
				<img src="icon/theater.png" alt="theater icon">
				<a href="#">Leisure Activities</a>
		    </div>
		    <div>
				<img src="icon/doctor.png" alt="doctor icon">
				<img src="icon/tooth.png" alt="tooth icon">
				<a href="#">Medical Care</a>
		    </div>
		    <div>
				<img src="icon/hat.png" alt="graduation hat icon">
				<img src="icon/thought.png" alt="thought icon">
				<a href="#">Education</a>
		    </div>
	   </div>
	   <div class="iconmiddle">
		    <div>
				<img src="icon/taxi.png" alt="taxi icon">
				<img src="icon/plane.png" alt="plane icon">
				<img src="icon/train.png" alt="train icon">
				<a href="#">Transportation</a>
		   </div>
	  </div>
	  <div class="iconbottom">
			<div>
				<img src="icon/salon.png" alt="salon icon">
				<img src="icon/makeup.png" alt="beauty icon">
				<a href="#">Beauty Care</a>
		    </div>
		    <div>
				<img src="icon/restaurant.png" alt="utensils icon">
				<img src="icon/serving-dish.png" alt="serving-dish icon">
				<a href="#">Restaurant</a>
		    </div>
		    <div>
				<img src="icon/hostel.png" alt="hotel icon">
				<img src="icon/luggage.png" alt="luggage icon">
				<a href="#">Hotel & Travel</a>
		    </div>
	   </div>
</div>
</section>
<?php
$service = $arrData['service'];
?>
	<h2><a href="index.php?route=pages.service&sericeID=<?=$service['id']?>"><?=$service['strName']?></a></h2>
	<div width='50'>
		<img src="images/<?=$service['strLogoFile']?>" alt="">
	</div>
	<h3>Description: </h3>
	<p><?=nl2br($service['strDescription'])?></p>
	<h3>Email: </h3>
	<p><?=nl2br($service['strEmail'])?></p>
	<h3>Address: </h3>
	<p><?=$service['strAddress']?></p>
	<h3>Phone: </h3>
	<p><?=nl2br($service['nPhone'])?></p>
	<div width='200'>
		<img src="images/<?=$service['strCoverFile']?>" alt="">
	</div>
