<!DOCTYPE html>
<html>
<body>
        This script inserts new data and then displays the database
        <br><br>
	<?php
	$servername = "localhost";
	$username = "studentuser";
	$password = "1234";
	$databasename = "clientdb";
	$connection = mysqli_connect($servername, $username, $password);
	if (!$connection) {
	  die("Failed connection: " . mysqli_connect_error());
	}
	echo "Successfully connected to database: $databasename";
	?>
<br>
	<?php
	$first_name = $_POST["first_name" ];
	$last_name = $_POST[ "last_name" ];
	$address = $_POST[ "address" ];
	$email = $_POST[ "email" ];
	$bean = $_POST[ "bean" ];
	$roast = $_POST[ "roast" ];
	$flavours = $_POST[ "flavour" ];
	$allflavours = '';
	foreach( $_POST["flavour"] as $flavour ) {
		 $allflavours= $allflavours . ' ' . $flavour . ' ';
	}
	$colour = $_POST[ "colour" ];
	$word = $_POST[ "word" ];
	$database_query = "INSERT INTO clientdb.infoid VALUES (default , '$first_name' , '$last_name' , '$address' , '$email' , '$bean' , '$roast' , '$allflavours' , '$colour' , '$word' )" ;
        mysqli_query($connection, $database_query) or die("Query error to database: $databasename ");
	?>
<br>
	<?php
         $database_query = "SELECT * FROM clientdb.infoid";
        mysqli_query($connection, $database_query) or die("Query error to database: $databasename ");
        $query_result = mysqli_query($connection, $database_query);
        while ($line = mysqli_fetch_array($query_result)) {
        echo $line[ 'id' ] . ' - client ' . $line[ 'first_name' ] .' ' . $line[ 'last_name' ] . ' has the address ' . $line[ 'address' ] . ', email: ' . $line[ 'email' ] . ' and wants coffee: ' . $line[ 'bean' ] . ' ' . $line[ 'roast' ] . ' ' . $line[ 'flavour' ] . ', with package of colour ' . $line[ 'colour' ] . ' and the word ' . $line[ 'word' ] . '<br />';
        }
        mysqli_close($connection);

	?>
</body>
</html>
