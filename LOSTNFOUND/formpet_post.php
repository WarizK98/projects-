<?php
$con=mysqli_connect("localhost","root","divchand2 ","hackman");
$own_name=$_POST["owner"];
$type =$_POST["enter"];
$pet =$_POST["petname"];
$breed =$_POST["breed"];
$mobno =$_POST["MobileNumber"];
$address =$_POST["address"];
$desc =$_POST["description"];
$cashprize =$_POST["cashprize"];

$sql = "INSERT INTO pet(id,owner,enter,petname,breed,phone,address,des,price) VALUES('','".$own_name."','".$type."','".$pet."','".$breed."','.$mobno.','".$address."','".$desc."','.$cashprize.')";

    $result = mysqli_query($con,$sql);
    if($result == 1){
        
        header("location:formpet.php");
    }
    else{
        echo "error..".mysqli_error($con);
    }

?>
<?php  
 $con = mysqli_connect("localhost", "root", "divchand2", "hackman");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(name) VALUES ('$file')";  
      if(mysqli_query($con, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                
                <br />  
                <form  method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  

                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($con, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  