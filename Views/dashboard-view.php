<h2>Hello <?=$arrData['user']['strFirstName']?>!</h2>
<div id="dashboard" class="container">
	<div id="dashboard-nav">
		<div class="dashboard-options">
			<a href="./?route=pages.dashboard&edit=profile" class="btnlogin">
				<span class="fas fa-user"></span>
				<h3>Edit Profile</h3>
			</a>
		</div>
		<div class="dashboard-options">
			<a href="./?route=pages.dashboard&edit=services" class="btnlogin">
				<span class="fas fa-briefcase"></span>
				<h3>Edit Services</h3>
			</a>
		</div>
		<div class="dashboard-options">
			<a href="./?route=pages.dashboard&edit=services" class="btnlogin">
				<span class="fas fa-plus-circle"></span>
				<h3>Add New Service</h3>
			</a>
		</div>
	</div>
	<div id="dashboard-content">
		<?php
			if(!empty($_GET['edit']) && $_GET['edit'] =='profile'){
		?>
			<form action="./?route=user.update" method="post">
				<label class="required contactLabel">First Name</label>
				<input type="text" name="strFirstName" placeholder="ex. Saphyra" value="<?=$arrData['user']['strFirstName']?>">

				<label class="required contactLabel" for="lastname">Last Name</label>
				<input type="text" name="strLastname" placeholder="ex. Donnaly" value="<?=$arrData['user']['strLastName']?>">

				<label class="required contactLabel" for="streetAdress">Street Address:</label>
				<input type="text" name="strAdress" placeholder="ex.nelson street" value="<?=$arrData['user']['strAddress']?>">

				<label class="required contactLabel" for="zipCode">Zip Code:</label>
				<input type="text" name="strZipCode" placeholder="x5x5x5" value="<?=$arrData['user']['strZipCode']?>">

				<label class="required contactLabel" for="email">Email</label>
				<input type="text" name="strEmail" placeholder="ex. abc@abc.com" value="<?=$arrData['user']['strEmail']?>">

				<input type="submit"  class="btn btn-primary"><br>
			</form>
		<?php
			}
			else if(!empty($_GET['edit']) &&  $_GET['edit']=='services' && empty($_GET['svcid'])){
				if(!empty($arrData['userCompanies'])){
		?>
				
					<div class="usercompanies-list">
						<ul>
		<?php
					foreach($arrData['userCompanies'] as $company){
		?>
						<li data-companyid="<?=$company['id']?>">
							<div class="usercompany-logo containBg">
								<span>
									<img src="images/<?=$company['strLogoFile']?>" alt="<?=$company['strName']?> logo">
								</span>
							</div>
							<div class="usercompany-info">
								<h3><?=$company['strName']?></h3>
								<p><?=$company['strAddress']?></p>
							</div>
							<a href="./?route=pages.dashboard&edit=services&svcid=<?=$company['id']?>">Edit <span class="fas fa-edit"></span></a>
						</li>
		<?php
					}
		?>
						</ul>
					</div>
		<?php
				}
				else{
		?>
					<h3>No companies registered!</h3>
		<?php
				}
			}
			else if(!empty($_GET['edit']) &&  $_GET['edit']=='services' && !empty($_GET['svcid'])){
				include('Views/registerservice-view.php');
			}
		?>
	</div>
</div>