<form action="">
	<label>Company Name:</label>
	<input type="text" name="strName">
	<label>Company Address:</label>
	<input type="text" name="strAddress">
	<label>Email for contact:</label>
	<input type="email" name="strEmail">
	<label>Phone Number:</label>
	<input type="text" name="nPhone">
	<label>Service Description</label>
	<textarea name="strDescription"></textarea>
	<label>Service Category:</label>
<?php foreach($arrData as $service){?>
	<input type="checkbox" value="<?=$service["id"]?>" name="categories[]"> <?= $service["strName"] ?>
<?php } ?>
</form>