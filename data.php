<?php

include 'conet.php';

$sql = "SELECT cli_id, cli_name FROM client";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Client id: " . $row["cli_id"]. " - Client Name: " . $row["cli_name"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>