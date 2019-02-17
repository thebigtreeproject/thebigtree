<h2>Hello <?=$arrData['user']['strFirstName']?>!</h2>
<div id="dashboard" class="container">
	<div id="dashboard-nav">
		<div class="dashboard-options">
			<a href="#" class="btnlogin" data-translation='0'>
				<span class="fas fa-user"></span>
				<h3>Edit Profile</h3>
			</a>
		</div>
		<div class="dashboard-options">
			<a href="#" class="btnlogin" data-translation='1'>
				<span class="fas fa-briefcase"></span>
				<h3>Edit Services</h3>
			</a>
		</div>
		<div class="dashboard-options">
			<a href="#" class="btnlogin" data-translation='2'>
				<span class="fas fa-plus-circle"></span>
				<h3>Add New Service</h3>
			</a>
		</div>
	</div>
	<div id="dashboard-content">
		<div id='dashboard-slideholder'>
			<span>
				<div class="update-user">
					<h2>Profile</h2>
					<form action="./?route=user.update" method="post">
						<label class="required contactLabel">First Name</label>
						<input type="text" name="strFirstName" placeholder="ex. Saphyra" value="<?=$arrData['user']['strFirstName']?>">

						<label class="required contactLabel" for="lastname">Last Name</label>
						<input type="text" name="strLastname" placeholder="ex. Donnaly" value="<?=$arrData['user']['strLastName']?>">

						<label class="required contactLabel" for="streetAdress">Street Address:</label>
						<input type="text" name="strAddress" placeholder="ex.nelson street" value="<?=$arrData['user']['strAddress']?>">

						<label class="required contactLabel" for="zipCode">Zip Code:</label>
						<input type="text" name="strZipCode" placeholder="x5x5x5" value="<?=$arrData['user']['strZipCode']?>">

						<label class="required contactLabel" for="email">Email</label>
						<input type="text" name="strEmail" placeholder="ex. abc@abc.com" value="<?=$arrData['user']['strEmail']?>">

						<input type="submit"  class="btn btn-primary"><br>
					</form>
				</div>
			</span>
			<span>
				<div class="usercompanies-list">
					<h2>My Services</h2>
	<?php 
		if(!empty($arrData['userCompanies'])){ 
			echo '<ul>';
			foreach($arrData['userCompanies'] as $company){
	?>
						<li>
							<div class="usercompany-logo containBg">
								<span>
									<img src="assets/<?=$company['strLogoFile']?>" alt="<?=$company['strName']?> logo">
								</span>
							</div>
							<div class="usercompany-info">
								<h3><?=$company['strName']?></h3>
								<p><?=$company['strAddress']?></p>
							</div>
							<a href="#" class="user-services" data-companyid="<?=$company['id']?>">Edit <span class="fas fa-edit"></span></a>
						</li>
	<?php
			}
			echo '</ul>';
		}
		else if(empty($arrData['userCompanies'])){
			echo '<h3>No companies registered!</h3>';
		}
	?>
				</div>
			</span>
			<span>
				<div id="service-form">
	<?php
		$formMode = 'update ';
		include('Views/registerservice-view.php');
	?>
				</div>
			</span>
		</div>
	</div>
</div>