<html>
<body>



<?php
	// Make a MySQL Connection
	mysql_connect("localhost", "root", "root") or die(mysql_error());
	mysql_select_db("test_create_DB") or die(mysql_error());

	// Create a MySQL table in the selected database
	mysql_query("CREATE TABLE example(
	id INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY(id),
 	forename VARCHAR(65),
 	surname VARCHAR(65),
 	age INT)")
 	or die(mysql_error());

	echo "Table Created!";

	

	// HTML link back to the main menu page
	echo '<h3><a href="http://localhost/Assign1.html">Return to Main Menu</a> <br></h3>';


?>

</body>
</html>