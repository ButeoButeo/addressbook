<?php include('core/init.php'); ?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("INSERT INTO `contacts` (name, first_name , street, fk_id_city , zipcode)
								VALUES (:name, :first_name , :street, :fk_id_city, :zipcode)");

//Bind Values
$db->bind(':name', $_POST['name']);
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':street', $_POST['street']);
$db->bind(':fk_id_city', $_POST['city']);
$db->bind(':zipcode', $_POST['zipcode']);


if ($db->execute()) {
	echo "Contact was added";
} else {
	echo "Could not add contact";
}
?>