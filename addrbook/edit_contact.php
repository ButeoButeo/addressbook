<?php include('core/init.php'); ?>

<?php
//Create DB Object
$db = new Database;

//Run Query
$db->query("UPDATE `contacts` SET 
			name		    = :name,
			first_name 		= :first_name,
			street 		    = :street,
			fk_id_city      = :fk_id_city,
			zipcode 		= :zipcode
			WHERE id = :id
			");


//Bind Values
$db->bind(':name', $_POST['name']);
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':street', $_POST['street']);
$db->bind(':fk_id_city', $_POST['city']);
$db->bind(':zipcode', $_POST['zipcode']);
$db->bind(':id', $_POST['id']);


if($db->execute()){
	echo "Contact was updated";
} else {
	echo "Could not update contact";
}
?>