<?php include('core/init.php'); ?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("SELECT *FROM city");

//Assign Result Set
$cities = $db->resultset();
?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iAddress Book| Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
		<div class="row">
			<div class="large-6 columns">
				<h1>iAddress Book</h1>
			</div>
			<div class="large-6 columns">
			<a class="add-btn button right small" data-reveal-id="addModal">Add Contact</a>
				<div id="addModal" class="reveal-modal" data-reveal>
					<h2>Add Contact</h2>
						<form id = "addContact" action="#" method="post">
						  <div class="row">
							<div class="large-6 columns">
							  <label>Name
								<input name="name" type="text" placeholder="Enter Name" />
							  </label>
							</div>
							 <div class="large-6 columns">
							  <label>First Name
								<input name="first_name" type="text" placeholder="Enter first Name" />
							  </label>
							</div>
						  </div>
 							<div class="row">
								<div class="large-6 columns">
								  <label>Street
								  <input name="street" type="text" placeholder="Enter Address 1" value="<?php echo $contact->address1; ?>" />
								  </label>

									<div class="large-4 columns">
										<label>City
										<select class="form-control" name="city">
											<?php foreach ($cities as $city){
												echo "<option value='$city->id_city'>".$city->name_city. "</option>";			
											}
											?>
										</select>
									  </label>
									</div>
							    </div>
								<div class="large-4 columns">
									<label>Zipcode
									    <input name="zipcode" type="text" placeholder="Enter Zipcode" value="<?php echo $contact->zipcode; ?>" />
								    </label>
								</div>
						  	<input name="submit" type="submit" class="add-btn button right small" value="Submit">
							<a class="close-reveal-modal">&#215;</a>
	                	</form>


					</div>
				</div>
			</div>
	
		<!--Loading Image -->
		<div id="loaderImage">
			<img src="img/ajax-loader.gif">
		</div>
		
		<!--Main Content -->
		<div id="pageContent"></div>
		
    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>