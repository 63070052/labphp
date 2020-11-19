<html lang="en">
<head>
  <title>ITF Lab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
 <h1>ITF Form>h1<
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab52.mysql.database.azure.com', 'it63070052@itflab52', 'YHVexv86', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<center><table width="600" border="1">
  <center><tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
  </tr><center>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><center><a href="form edit.html"><input type="submit" value="EDIT" class="btn btn-warning"></a>&nbsp;&nbsp;<a href="form delete.html"><input type="submit" value="DELETE"  class="btn btn-danger"></a></center></td>
  </tr>
<?php
}
?>
</table><center>
<center><a href="form insert.html"><input type="submit" value="INSERT" class="btn btn-info"></a></center>
<?php
mysqli_close($conn);
?>
</body>
</html>
