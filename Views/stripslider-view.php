<style>
	.stripslider-holder{
		position: relative;
		overflow: hidden;
	}
	
	.stripslider{
		position: relative;
		left: 0;
		transition: all 0.5s ease;
	}
	.stripslider > :first-child{
		display: flex;
		left: 0;
		align-items: stretch;
	}
	.stripslider > :first-child > *{
		flex: 1;
		display: flex;
		width: auto !important;
	}
	.stripslider-holder a.fas{
		position: absolute;
		top: 0;
		bottom: 0;
		height: 35px;
		margin: auto;
		color: #ff5a1f;
	}
	.stripslider-holder .fas.fa-angle-right{
		right:0;
	}
	.stripslider-holder .fas.fa-angle-left{
		left:0;
	}
</style>


<div class="stripslider-holder">	
	<div class="stripslider">
		<?=$arrData?>
	</div>
	<a href='#' class="fas fa-angle-right next"></a>
	<a href='#' class="fas fa-angle-left back"></a>
</div>