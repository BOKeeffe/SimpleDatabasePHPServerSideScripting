<html>
<body>

<?php
	
	
	// checking if data exists from insert.html form, if so carry out database updates
	if( $_POST["forename"] || $_POST["surname"] || $_POST["age"] ){


		// Make a MySQL Connection
		mysql_connect("localhost", "root", "root") or die(mysql_error());
		// select the database (test_create_DB)
		mysql_select_db("test_create_DB") or die(mysql_error());

		// table fields from form stored in variables
		$forename = $_POST['forename'];
		$surname = $_POST['surname'];
		$age = $_POST['age'];

		// checking if data is valid
		if (preg_match("/[^A-Za-z'-]/",$_POST['$forename'],$_POST['$surname'] )) {
			die ("invalid name and name should be alpha"); 
		}

		// prints out current person added to the database
		echo " $forename  $surname $age has been added to the database";

		// Taking the data from the insert.html form stored in the $forename,$surname & $age variables
		// then inserting it into the name & age fields 
		// of the example table from (test_create_DB ) database
		mysql_query("INSERT INTO example (forename, surname, age) 
		VALUES('$forename', '$surname', '$age' ) ") 
		or die(mysql_error());

		// HTML links to add another entry to database and a link back to the main menu page
		echo '<h3><a href="http://localhost/insert.html">Insert another entry</a> <br></h3>';
		echo '<h3><a href="http://localhost/Assign1.html">Return to Main Menu</a> <br></h3>';
		
		exit();

	}
?>	

</body>
</html>




