<form method="post" action="index.php?route=company.save" onsubmit="return validate()">
	<input type="hidden" name="nUserID" value="<?=$_SESSION['user']['id'];?>">
	
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
	
	<label class="required">Service Category:</label>
	<div>
<?php foreach($arrData as $service){?>
	<input type="checkbox" value="<?=$service["id"]?>" name="categories[]"> <?= $service["strName"] ?>
<?php } ?>
	</div>
	
	<label class="required">Averege Price:</label>
	<input type="text" name="nPrice" id="">
	
	<label>Company logo:</label>
	<input type="file" accept="image/png, image/jpeg">
	
	<label>Service cover image:</label>
	<input type="file" accept="image/jpeg, image/png">
	
	<input type="submit"  class="btn btn-primary"><br>
</form>