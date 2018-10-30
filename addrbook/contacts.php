<?php include('core/init.php'); ?>

 <link rel="shortcut icon" href="favicon.ico">
<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("SELECT `contacts`.`name`, `contacts`.`id`, `contacts`.`first_name`, `city`.`id_city`, `contacts`.`street`, `contacts`.`zipcode`, `city`.`name_city`
FROM contacts
INNER JOIN city ON `contacts`.`fk_id_city` = `city`.`id_city`");

//Assign Result Set
$contacts = $db->resultset();
?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("SELECT * FROM city");

//Assign Result Set
$cities = $db->resultset();
?>



<div class="row">
	<div class="large-12 columns">
		<table>
			<thead>
				<tr>
					<th width="200">Name</th>
					<th width="200">id</th>
					<th width="130">First name</th>
					<th width="200">street</th>
					<th width="250">City</th>
					<th width="100">Zip Code</th>
					<th width="100">Make changes</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($contacts as $contact) : ?>
				<tr>
					<td><a href="contact.html"><?php echo $contact->name; ?></a></td>
					<td><?php echo $contact->id; ?></td>
					<td><?php echo $contact->first_name; ?></td>
					<td><?php echo $contact->street; ?></td>
					<td><?php echo $contact->name_city; ?></td>
					<td><?php echo $contact->zipcode; ?></td>
					<td>
						<ul class="button-group">
							<li>
							<a href="#" class="button success tiny" data-reveal-id="editModal<?php echo $contact->id; ?>" data-contact-id="<?php echo $contact->id; ?>">Edit</a></td>
							<div id="editModal<?php echo $contact->id; ?>" data-cid="<?php echo $contact->id; ?>" class="reveal-modal editModal" data-reveal>
								<h2>Edit Contact</h2>
								<form id= "editContact" action="#" method="post">
								  <div class="row">
									<div class="large-6 columns">
									  <label>Name
										<input name="name" type="text" placeholder="Enter Name" value="<?php echo $contact->name; ?>"/>
									  </label>
									</div>
									 <div class="large-6 columns">
									  <label>First Name
										<input name="first_name" type="text" placeholder="Enter first Name" value="<?php echo $contact->first_name; ?>"/>
									  </label>
								  </div>
							   </div>
								  <div class="row">
									<div class="large-6 columns">
									  <label>Street
										<input name="street" type="text" placeholder="Enter street" value="<?php echo $contact->street; ?>" />
									  </label>
									</div>
									<div class="large-4 columns">
										<label>City
										<select class="form-control" name="city">
											<?php echo "<option value='$city->id_city'>".$contact->name_city. "</option>";	?>
											<?php foreach ($cities as $city){
												
												echo "<option value='$city->id_city'>".$city->name_city. "</option>";			
											}
											?>
										</select>
									  </label>
									</div>
									<div class="large-4 columns">
										<label>Zipcode
										<input name="zipcode" type="text" placeholder="Enter Zipcode" value="<?php echo $contact->zipcode; ?>" />
									  </label>
									</div>
								  <input type="hidden" name="id" value="<?php echo $contact->id; ?>">
								  <input name="submit" type="submit" class="add-btn button right small" value="Submit">
									<a class="close-reveal-modal">&#215;</a>
						         </form >
						     </li>
						  </ul>
					</td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>


