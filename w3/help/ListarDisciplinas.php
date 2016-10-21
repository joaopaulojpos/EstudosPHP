<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prova";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT nome, professor FROM disciplina";
$result = mysqli_query($conn, $sql);
$lista = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "Disciplina: " . $row["nome"]. " - - - Professor: " . $row["professor"]. "<br>";
		$lista[] = $row;
	}
} else {
    echo "0 results";
}

mysqli_close($conn);
?>