<html>
<body>

<?php
	// Make a MySQL Connection
	mysql_connect("localhost", "root", "root") or die(mysql_error());
	mysql_select_db("test_create_DB") or die(mysql_error());
	// Insert a row of information into the table "example"
	mysql_query("INSERT INTO example
	(forename, surname, age) VALUES('Bill', 'o keeffe', '31' ) ")
	or die(mysql_error());

	mysql_query("INSERT INTO example
	(forename, surname, age) VALUES('Amanda', 'o keeffe', '31' ) ")
	or die(mysql_error());
	
	
	
	echo "Data Inserted!";

	// HTML link back to the main menu page
	echo '<h3><a href="http://localhost/Assign1.html">Return to Main Menu</a> <br></h3>';

?>

</body>
</html>