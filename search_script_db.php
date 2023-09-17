<!DOCTYPE html>
<html>
<body>
        This script searches data in a database:
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
<br> 	Database search result: <br><br>
        <?php
        $database_query = "SELECT * FROM clientdb.infoid WHERE first_name LIKE '$_POST[first_name]' ";
	mysqli_query($connection, $database_query) or die("Query error to database: $databasename ");
       	$query_result= mysqli_query($connection, $database_query) ;
	while ($line = mysqli_fetch_array($query_result)) {
        echo $line[ 'id' ] . ' - client ' . $line[ 'first_name' ] .' ' . $line[ 'last_name' ] . ' has the address ' . $line[ 'address' ] . ', email: ' . $line[ 'email' ] . ' and wants coffee: ' . $line[ 'bean' ] . ' ' . $line[ 'roast' ] . ' ' . $line[ 'flavour' ] . ', with package of colour ' . $line[ 'colour' ] . ' and the word ' . $line[ 'word' ] . '<br />';
   	}	
        mysqli_close($connection);

        ?>
</body>
</html>
