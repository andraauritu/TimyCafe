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
<html>
        <head>
        </head>
        <body>
        <br><br>This PHP script modifies data and then reads the database <br><br>

        <?php

        $database_query = "UPDATE clientdb.infoid SET word='dog' WHERE id=4" ;
	mysqli_query($connection, $database_query) or die("Query error to database: $databasename ");

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


