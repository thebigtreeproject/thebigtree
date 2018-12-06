<section id="filterSearch">
	<form method="post" action="search.php">
		<div class="searchField">
		<input type="text" name="strKeyword" id="searchField"  autocomplete="off" placeholder="Search for users by name, email, order number, order date..">
		</div><!--searchField-->
	</form>

	<div class="filterTable">
		<table cellspacing="0">
			<thead>
				<td><a href="#" data-filtervalue="strFirstName">First Name</a></td>
				<td><a href="#" data-filtervalue="strLastName">Last Name</a></td>
				<td><a href="#" data-filtervalue="strEmail">Email Address</a></td>
				<td><a href="#" data-filtervalue="nOrderNumber">Order Number</a></td>
				<td><a href="#" data-filtervalue="nOrderDate">Order Date</a></td>
			</thead>

			<tbody id="searchResults">
				<!-- this is where my table will exist -->
				<?php include("views/filter.php");?>
			</tbody><!--searchResults-->
		</table>
	</div><!--filterTable-->
</section><!--filterSearch-->