<?php
	// If there is no data about the category, show error
	if($arrData['category']){
?>
<section id="category-class">
	<h2><?=$arrData['category']['strName']?></h2>
	<img src="images/<?=$arrData['category']['strCoverFile']?>" alt="<?=$arrData['category']['strCoverDescription']?>">
	<p><?=$arrData['category']['strDescription']?></p>
<?php
	$arrAlphebet = range('A', 'Z');
	$initialsFilter = '';
	$companiesList = '';
	foreach($arrAlphebet as $letter){
		$companyexist = false;
		$nOfEntry = 0;
		if($arrData['companies']){
			foreach($arrData['companies'] as $key => $company){
				if($company['strName'][0] == $letter){
					if($nOfEntry==0){
						$initialsFilter .= '<a href="#" class="btn alpha-filter" data-searchletter="'.$letter.'">'.$letter.'</a>';
						$companiesList .= '
						<ul id="companylist-'.$letter.'" class="complist">';
						$companiesList .= '<!-- list of companies begining with '.$letter.'-->';
						$companiesList .='
							<li>
								<a href="./?route=pages.modalservice&serviceID='.$company['id'].'" class="services-name">'.$company['strName'].'</a>
							</li>';
						$nOfEntry++;
					}
					else{
						$companiesList .= '<li><a href="./?route=pages.modalservice&serviceID='.$company['id'].'" class="services-name">'.$company['strName'].'</a></li>';
					}
					if($key == count($arrData['companies'])-1){
						$companiesList .= '
						</ul>
						<!--END of listing begining with '.$letter.'-->';
					}
				}
			}
		} //end of IF companies is true
	}

	//set a "no companies registered" message to show
	$noCompanies = '<h3>
		Sorry there are no companies regitered on this category
	</h3>
	<a href="./?route=pages.services">
		Back to categories.
	</a>';

	echo ($initialsFilter)?$initialsFilter:$noCompanies;
?>

<div class="companieslists">
	<?= $companiesList; ?>
</div>
<?php
} //end of IF
else {
?>
	<div class="error">
		<h2>
			Sorry, looks like this category of service is not available!
		</h2>
	</div>
<?php
} //end of ELSE
?>
</section>