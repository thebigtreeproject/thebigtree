<div>
<?php foreach($arrData as $photoIndex => $photo){ ?>
	<div class="productPictures" data-imageindex="<?=$photoIndex?>">
		<span class="coverBg productPicture-wraper">
			<img src="assets/<?=$photo?>" alt="product detail view">
		</span>
	</div>
<?php } ?>
</div>