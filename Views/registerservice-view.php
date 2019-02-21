<form method="post" action="index.php?route=company.save" enctype="multipart/form-data">
	<input type="hidden" name="nUserID" value="<?=$arrData['user']['id'];?>">
	
	<span class="formsection">
		<h2>New Service</h2>

		<label class="required">Company Name:</label>
		<input type="text" name="strName">
		
		<label class="required">Company Address:</label>
		<input type="text" name="strAddress">
		
		<label class="required">Email for contact:</label>
		<input type="email" name="strEmail">
		
		<label>Phone Number:</label>
		<input type="text" name="nPhone">
		
		<label class="required">Service Description</label>
		<textarea name="strDescription"></textarea>
	</span>
	
	<span class="formsection">
		<label class="required">Service Category:</label>
		<div>
			<ul>
<?php foreach($arrData['categories'] as $service){?>
				<li>
					<input type="checkbox" value="<?=$service["id"]?>" name="categories[]"> <?=$service["strName"]?>
				</li>
<?php } ?>
			</ul>
		</div>
		
		<label class="required">Averege Price:</label>
		<input type="text" name="nPrice" id="">
		
		<label>Company logo:</label>
		<input type="file" name="strLogoFile" accept="image/png, image/jpeg">
		<span></span>
		
		<input type="submit"  class="btn btn-primary"><br>
	</span>
</form>