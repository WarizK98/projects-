
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
   
</head>
<style>
           body
             {
              background-image: url("background1.png");
  background-color: #cccccc;
  background-repeat: no-repeat;
  background-size: 2000px 1500px;
             }
             </style>
           
<body>
<form action="formelec_post.php" method=POST>
<div style="margin:10px">
    <h1><center>Fill this out</center></h1>
    Name of the owner<br>
    <input type="text" name="owner" required/><br>
    Enter the missing:<br>
    <input type="text" name="enter" required/><br>
    Company of the gadget<br>
    <input type="text" name="company" required/><br>
    Model<br>
    <input type="text" name=" model" required/><br>
    Color<br>
    <input type="text" name=" color" required/><br>
    Mobile Number<br>
    <input type="text" name="phone" required/><br>
    Address<br>
    <textarea rows="5" cols="30" name="address" ></textarea><br>
    Description<br>
    <textarea rows="10"  cols="40" name="des"  placeholder="Specify the date and location " required></textarea><br>
    Cash prize<br>
    <input type="text" name="prize" required/><br>
    </div>
  
           </div>  
      <button type="submit" style="padding:8px;margin:10px">Submit</button><br>
      
      <?php
    $con=mysqli_connect("localhost","root","divchand2","hackman");
    $find_hackman=mysqli_query($con,"SELECT * FROM ele");
    while($row=mysqli_fetch_assoc($find_hackman))
    {
        $own_name=$row['owner'];
        $enter =$row['enter'];
        $company =$row['company'];
        $model =$row['model'];
        $color=$row['color'];
        $mobno =$row['phone'];
        $address =$row['address'];
        $desc =$row['des'];
        $cashprize =$row['prize'];
        

        echo"<p>
      
       <pre> 
       owner name:$own_name
       type of device:$enter&nbsp;
       name of  the company:$company&nbsp;
       model:$model
       color:$color
       mobile number:$mobno
       address of the owner:$address
       Description:$desc
      cash prize:$cashprize</p></pre>";
            }
   
    ?>
      </form>
      
     

</body>
</html>
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
          
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
      <h3><center>If required,please upload the image of the missing item </center></h3>
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