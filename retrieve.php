<html>
<head>
</head>
<body>
<?php
	
	//make  connection
	$dbc = mysql_connect("localhost","root","root");
	if (!$dbc){
		die("Can not connect: " . mysql_error());
	}
	mysql_select_db("test_create_DB",$dbc);

	// if the update button is pressed in the form, run the mysql script to update the example table row with new fields
	if(isset($_POST['update'])){
		$UpdateQuery = "UPDATE example SET id='$_POST[hidden]', forename='$_POST[Forename]', surname='$_POST[Surname]',age='$_POST[Age]' WHERE id='$_POST[hidden]'";               
		mysql_query($UpdateQuery, $dbc);
	};

	// if the delete button is pressed on the form, remove the row using the rows unique id(primary key)
	if(isset($_POST['delete'])){
		$DeleteQuery = "DELETE FROM example WHERE id='$_POST[hidden]'";          
		mysql_query($DeleteQuery, $dbc);
	};

	// select all from the database and assign the value to variable $sql
	$result = "SELECT * FROM example";
	$sql = mysql_query($result,$dbc);

	echo "<h3>Database current state</h3>";
	echo "<table border=1>
	<tr>
	<th>ID</th><th>Forename</th><th>Surname</th><th>Age</th></tr>";
	// aslong as their are rows left then display them
	while($row = mysql_fetch_array($sql)){

		//All rows are displayerd inside the form where the values can be edited.
		//Each row an Update and Delete submit to process the editing options
		//The id is not open for editing as it is a unique(primary key) and is used to uniquely identify rows in the table
		echo "<form action=retrieve.php method=post>";
		echo "<tr>";
		echo "<td>" . $row['id'] . "</td>";
		echo "<td>" . "<input type=text name=Forename value='" . $row['forename'] . "' </td>";
		echo "<td>" . "<input type=text name=Surname value='" . $row['surname'] . "' </td>";
		echo "<td>" . "<input type=text name=Age value='" . $row['age'] . "' </td>";
		echo "<td>" . "<input type=hidden name=hidden value='" . $row['id'] . "' </td>";
		echo "<td>" . "<input type=submit name=update value=update" . " </td>";
		echo "<td>" . "<input type=submit name=delete value=delete" . " </td>";
		echo "</tr>";
		echo "</form>";
	}
	
	// HTML links back to the main menu page
	echo '<h3><a href="http://localhost/Assign1.html">Return to Main Menu</a> <br></h3>';

	// close database connection
	mysql_close($dbc);
?>

</body>
</html>