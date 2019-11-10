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

</table>
<?php 
$con= mysqli_connect('localhost', 'root', 'divchand2', 'library');
$id=$_GET["id"];
$sem=$_GET["sem"];
switch($sem)
{
    case "3":$sql = "DELETE FROM library3 WHERE id=$id";
break;
case "4":$sql = "DELETE FROM library4 WHERE id=$id";
break;
case "5":$sql = "DELETE FROM library5 WHERE id=$id";
break;
case "6":$sql = "DELETE FROM library6 WHERE id=$id";
break;
case "7":$sql = "DELETE FROM library7 WHERE id=$id";
break;
case "8":$sql = "DELETE FROM library8 WHERE id=$id";
break;
default:echo "error";
}
$res=mysqli_query($con, $sql);
if($res==0)
{
    echo "book not available";
}

mysqli_close($con);
?>

<input type="submit" value="Submit" class="btnAddAction" />
</form>
</body>
</html>
