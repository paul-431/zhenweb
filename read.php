<?php
include 'config.php';

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

if ( $result->num_rows > 0 ) {
    while ($row = $result ->fetch_assoc()) {
        echo "ID: " . $row["id"] . " -Name: " . $row["name"] . " -Email: ". $row["email"] . "<br>";

    }

} else {
    echo "0 results";
}
?>
