<?php
$con=mysqli_connect("localhost","root","divchand2 ","hackman");

$own_name=$_POST["owner"];
$enter =$_POST["enter"];
$company =$_POST["company"];
$model =$_POST["model"];
$color=$_POST["color"];
$mobno =$_POST["phone"];
$address =$_POST['address'];
$desc =$_POST['des'];
$cashprize =$_POST['prize'];

$sql = "INSERT INTO ele(id,owner,enter,company,model,phone,color,address,des,prize) VALUES('','".$own_name."','".$enter."','".$company."','.$model.','".$color."','.$mobno.','".$address."','".$desc."','.$cashprize.')";
    $result = mysqli_query($con,$sql);
    if($result == 1){
        
        header("location:formelec.php");
    }
    else{
        echo "error..".mysqli_error($con);
    }

?>