<html>
<body>

<?php


	//check if data exists before carring out operations
	if($_REQUEST['name']){

		// Make a MySQL Connection
		mysql_connect("localhost", "root", "root") or die(mysql_error());
		// select the database (test_create_DB)
		mysql_select_db("test_create_DB") or die(mysql_error());

		// $search variable is assigned the value of the form submission at search.html
		$search = $_REQUEST['name'];

		//'$search' variable is assigned the entry in the database that match '$search'
		// The query checks for entrys in 'example' table where the forename or surename match and assign them to a variable '$result'
		$result = mysql_query("SELECT * FROM example WHERE forename like '$search' OR surname like '$search' ") or die(mysql_error());

		echo "Search Retrived";
		//table setup
		echo "<table border='1'>";
		echo "<tr><th> Forename </th> <th> Surname </th>  <th> Age</th></tr>";
	
		// aslong as their are more entrys that match $result in the database keep printing to tables
		while($row = mysql_fetch_array($result)){

			// Print out the contents of each row into a table
			echo "</td><td>";
			echo $row['forename'];
			echo "</td><td>";
			echo $row['surname'];
			echo "</td><td>"; 
			echo $row['age'];
			echo "</td></tr>";

		}
		echo "</table>";

		// HTML links back to the main menu page
		
		echo '<h3><a href="http://localhost/Assign1.html">Return to Main Menu</a> <br></h3>';
	
		exit();
	}
	// close database connection
	mysql_close($dbc);
?>

</body>
</html>
