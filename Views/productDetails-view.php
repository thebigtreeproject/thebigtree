<div class="productDetailContainer">
	<div class="detailsHolder">
		<div class="detailsHolder-row">
			<div class="imagesContainer">
				<div class="imageHolderContainer">
					<div class="mainImage containBg">
						<img src="assets/<?=$arrData['product']['strFile']?>" alt="placeholder">
					</div><!---mainImage-->
					<div class="imageViews">
					<?= $arrData['product']['variants'] ?>
					</div><!--imageViews--->
				</div><!--imageHolderContainer-->
			</div><!--imagesContainer-->
			<div class="productContentContainer">		
				<h2 id="productName" data-productid="<?=$arrData['product']['id']?>"><?=$arrData['product']['strName']?></h2>
				<p><span class="starRate"><span id="fill" style="width: <?=$arrData['product']['nStars']*2?>%"><img src="images/pawsMask.png" alt="star range"></span></span> Reviews(<a target="_blank" rel="noopener noreferrer" href="https://www.amazon.com/product-reviews/B0777TBXSP/ref=acr_dpproductdetail_text?ie=UTF8&showViewpoints=1"><?=$arrData['product']['nReviews']?></a>)
				</p>
				<h3 id="nPrice">$<?=$arrData['product']['nPrice']?></h3>
				<h3>Advantages: </h3>
				<ul>
					<?php
						foreach($arrData['product']['advantages'] as $advantage){
					?>
						<li><span class="fas fa-paw"></span><?=$arrData['advantagesCaption'][$advantage]?></li>
					<?php } ?>
				</ul>
				<div class="product-details-row product-size">
					<h3>Size:</h3>
					<p><?=$arrData['sizesCaption'][$arrData['product']['nSizeID']]?></p>
					<a href="#" data-modaltarget="size">(Size Chart)</a>
				</div>

				<div class="product-details-row product-quantity" >
					<label>Quantity: </label>
					<div class="item-quantity-decrement"><span class="fas fa-minus"></span></div>
					<input id="quantity" name="nQuantity" type="text" value="1">
					<div class="item-quantity-increment"><span class="fas fa-plus"></span></div>
				</div>
				<a id="addToCart" href="#" class="btn btn-primary">Add to Cart</a>
			</div><!--detailsHolder--->
		</div>
		<div class="productDescription detailsHolder-row">
			<h2>Description :</h2>
			<p>
				<?=$arrData['product']['strDescription']?>
			</p>
		</div><!---productDescription-->
	</div><!--productContentContainer-->
</div><!--productDetailContainer-->

