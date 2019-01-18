<?php
foreach($arrData['categories'] as $category){
?>
	<a href="index.php?route=pages.category&catid=<?=$category['id']?>"><?=$category['strName']?></a>
<?php
}
foreach($arrData['services'] as $service){
?>
	<h2><a href="index.php?route=pages.service&serviceID=<?=$service['id']?>"><?=$service['strName']?></a></h2>
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
<?php
}
?>