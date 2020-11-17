<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab52.mysql.database.azure.com', 'it63070052@itflab52', 'YHVexv86', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$name = $_POST['name'];
$comment = $_POST['comment'];

$sql = "UPDATE guestbook SET Comment='$comment' WHERE Comment='$comment' ";
$sql = "UPDATE guestbook SET Name='$name' WHERE Name='$name' ";

if (mysqli_query($conn, $sql)) {
    header('Location: https://phpscript52.azurewebsites.net/show.php');

    //echo "New record created successfully! CONGRATULATION!";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>

