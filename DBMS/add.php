<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<div class="header">
        <h2>CART</h2>
    </div>
<?php
	
	$bookID = $_GET["id"];
	$bookSem = $_GET["sem"];
	$bookSubject = $_GET["name"];
	$bookTb = $_GET["tb"];
	$bookAuthor = $_GET["author"];
	$bookCount = $_GET["count"];

	$con= mysqli_connect('localhost', 'root', '', 'library');
	switch($bookSem)
	{
		case "3":$sql = "SELECT * FROM library3 WHERE id=$bookID";
		break;
		case "4":$sql = "SELECT * FROM library4 WHERE id=$bookID";
		break;
		case "5":$sql = "SELECT * FROM library5 WHERE id=$bookID";
		break;
		case "6":$sql = "SELECT * FROM library6 WHERE id=$bookID";
		break;
		case "7":$sql = "SELECT * FROM library7 WHERE id=$bookID";
		break;
		case "8":$sql = "SELECT * FROM library8 WHERE id=$bookID";
		break;
		default:echo "error";
	}
	
	$result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
	$available = $row['available'];

	if($available == 0) {
		echo "<b><p align='center'> <font color=white size='9pt'>BOOK OUT OF STOCK</b>";
	} else if($available < $bookCount) {
	 	echo "Only ".$available." books available";
	} else {
		?>
			<form action="submit.php" method="get">
				
				<table>
				<tr>
					<td><?php echo $bookID ?> </td>
					<td> <?php echo $bookSem ?> </td>
					<td> <?php echo $bookSubject ?> </td>
					<td> <?php echo $bookTb ?> </td> 
					<td> <?php echo $bookAuthor ?> </td>
				</tr>

				</table>
				<?php 
				switch($bookSem)
				{
					case "3":$sql = "UPDATE library3 SET available = available - $bookCount WHERE id=$bookID";
					break;
					case "4":$sql = "UPDATE library4 SET available = available - $bookCount WHERE id=$bookID";
					break;
					case "5":$sql = "UPDATE library5 SET available = available - $bookCount WHERE id=$bookID";
					break;
					case "6":$sql = "UPDATE library6 SET available = available - $bookCount WHERE id=$bookID";
					break;
					case "7":$sql = "UPDATE library7 SET available = available - $bookCount WHERE id=$bookID";
					break;
					case "8":$sql = "UPDATE library8 SET available = available - $bookCount WHERE id=$bookID";
					break;
					default:echo "error";
				}
				$res=mysqli_query($con, $sql);
				mysqli_close($con);
				?>

				<input type="submit" value="Submit" class="btnAddAction" />
			</form>
		<?php
	}

?>
</body>
</html>