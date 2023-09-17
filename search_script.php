<html>
<body>
This script searches in a database:
<br><br>
<?php

$search = $_POST['search'];

$servername = "localhost";
$username = "studentuser";
$password = "1234";
$db = "clientdb";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from clientdb.infoid where 'first_name' LIKE  '$result' ";

$result = $conn->query($sql);

if ($result->num_rows> 0 ){
while($row = $result->fetch_assoc() ){
	echo $row[ "id" ] . ' - client ' . $row[ "first_name" ] .' ' . $row[ "last_name" ] . ' has the address ' . $row[ 'address' ] . ', email: ' . $row[ 'email' ] . ' and wants coffee: ' . $row[ 'bean' ] . ' ' . $row[ 'roast' ] . ' ' . $row[ 'flavour' ] . ', with package of colour ' . $row[ 'colour' ] . ' and the word ' . $row[ 'word' ] . '<br />';
}
} else {
	echo "0 records";
}

$conn->close();

?>
</body>
</html>
