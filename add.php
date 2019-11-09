<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form action="submit.php" method="get">
<h1> Cart</h1>
<table>
<tr>
<td><?php echo $_GET["id"]; ?> </td>
 <td> <?php echo $_GET["sem"]; ?> </td>
<td> <?php echo $_GET["name"]; ?> </td>
<td> <?php echo $_GET["tb"]; ?> </td> 
<td> <?php echo $_GET["author"]; ?> </td>
</tr>
<tr>
<td><?php echo $_GET["id1"]; ?> </td>
 <td> <?php echo $_GET["sem1"]; ?> </td>
<td> <?php echo $_GET["name1"]; ?> </td>
<td> <?php echo $_GET["tb1"]; ?> </td> 
<td> <?php echo $_GET["author1"]; ?> </td>
</tr>
<tr>
<td><?php echo $_GET["id2"]; ?> </td>
 <td> <?php echo $_GET["sem2"]; ?> </td>
<td> <?php echo $_GET["name2"]; ?> </td>
<td> <?php echo $_GET["tb2"]; ?> </td> 
<td> <?php echo $_GET["author2"]; ?> </td>
</tr>
<tr>
<td><?php echo $_GET["id3"]; ?> </td>
 <td> <?php echo $_GET["sem3"]; ?> </td>
<td> <?php echo $_GET["name3"]; ?> </td>
<td> <?php echo $_GET["tb3"]; ?> </td> 
<td> <?php echo $_GET["author3"]; ?> </td>
</tr>
<tr>
<td><?php echo $_GET["id4"]; ?> </td>
 <td> <?php echo $_GET["sem4"]; ?> </td>
<td> <?php echo $_GET["name4"]; ?> </td>
<td> <?php echo $_GET["tb4"]; ?> </td> 
<td> <?php echo $_GET["author4"]; ?> </td>
</tr>
<tr>
<td><?php echo $_GET["id5"]; ?> </td>
 <td> <?php echo $_GET["sem5"]; ?> </td>
<td> <?php echo $_GET["name5"]; ?> </td>
<td> <?php echo $_GET["tb5"]; ?> </td> 
<td> <?php echo $_GET["author5"]; ?> </td>
</tr>
<tr>
<td><?php echo $_GET["id6"]; ?> </td>
 <td> <?php echo $_GET["sem6"]; ?> </td>
<td> <?php echo $_GET["name6"]; ?> </td>
<td> <?php echo $_GET["tb6"]; ?> </td> 
<td> <?php echo $_GET["author6"]; ?> </td>
</tr>
</table>
<?php
$con= mysqli_connect('localhost', 'root', 'divchand2', 'library');
$id=$_GET['id']; 
$sql = "DELETE FROM library3 WHERE id=$id";

mysqli_query($con, $sql);

if($res==0)
{
    echo "the book is not  available";
}
mysqli_close($con);

?>

<input type="submit" value="Submit" class="btnAddAction" />
</form>
</body>
</html>
