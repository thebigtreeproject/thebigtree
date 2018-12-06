<?php
include("Views/header-view.php");
?>
<div class="content">
	<div class="<?=(isset($contentMainClass)?$contentMainClass:"container");?>">
		<?=$content?>
	</div>
</div>
<?php
include("Views/footer-view.php");
?>