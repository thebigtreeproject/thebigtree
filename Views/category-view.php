<h2><?=$arrData['category']['strName']?></h2>
<img src="images/<?=$arrData['category']['strCoverFile']?>" alt="<?=$arrData['category']['strCoverDescription']?>">
<p><?=$arrData['category']['strDescription']?></p>

<?php
$arrAlphebet = range('A', 'Z');
foreach($arrAlphebet as $letter){
?>
<a href="#" class="btn alpha-filter" data-searchletter="<?=$letter?>"><?=$letter?></a>
<?php } ?>

<div class="companieslists">
<?php
foreach($arrAlphebet as $letter){
	$companyexist = false;
?>
	<ul id="companylist-<?=$letter?>" class="complist">
<?php 
	foreach($arrData['companies'] as $company){ 
		if($company['strName'][0] == $letter){?>
			<li><a href="./?route=pages.modalservice&serviceID=<?=$company['id']?>" class="services-name"><?=$company['strName']?></a></li>
<?php
			$companyexist = true;
		}
	}
	if(!$companyexist){
		echo '<li>Sorry we don\'t have any service starting with the letter '.$letter.'</li>';
	}
?>
	</ul>
<?php
}
?>
</div>