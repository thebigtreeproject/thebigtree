<?=isset($arrData[0]['categoryName'])?"<h3 class='products-categoryname'>".$arrData[0]['categoryName']."</h3>":'';?>
<div class="cardView">
	<?php
	foreach($arrData['products'] as $product){?>
		<div class="productBox sliderElement">
			<div class="placeHolder">
				<div class="holderImage coverBg">
					<img src="assets/<?=$product['strFile']?>">
				</div><!--holderImage coverBg-->
				<div class="productName">
					<h3><?=$product['strName']?></h3>
				</div><!--productname-->
				<div class="desc">
					<ul>
					<?php
						foreach($product['advantages'] as $advantage){
					?>
						<li><span class="fas fa-paw"></span><?=$arrData['advantagesCaption'][$advantage]?></li>
					<?php } ?>
					</ul>
				</div><!--desc-->
				<div class="price">
					<p>$<?=$product['nPrice']?></p>
				</div><!--price-->
				<a class="btn btn-primary" href="?action=products&id=<?=$product['id']?>">View Details</a>
			</div><!--placeholder-->
		</div><!--productBox-->	
	<?php } ?>
</div><!--cardView-->

