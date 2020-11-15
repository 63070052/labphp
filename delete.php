<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab52.mysql.database.azure.com', 'it63070052@itflab52', 'YHVexv86', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];

// sql to delete a record
$sql = "DELETE FROM guestbook (Name , Comment) VALUES ('$name', '$comment')";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

  
mysqli_close($conn);
?>
