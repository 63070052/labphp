<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab52.mysql.database.azure.com', 'it63070052@itflab52', 'YHVexv86', 'ITFlab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table width="600" border="1">
  <tr>
    <th<center> width="100"> <div align="center">Name</div><center></th>
    <th<center> width="350"> <div align="center">Comment </div><center></th>
    <th<center> width="150"> <div align="center">Action </div><center></th>
  </tr>
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
</table>
<center><a href="form insert.html"><input type="submit" value="INSERT" class="btn btn-info"></a></center>
<?php
mysqli_close($conn);
?>
</body>
</html>
