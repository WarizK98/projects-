<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
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
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          
<script>
$(document).ready(function(){
  $("form").submit(function(){
     alert("Your details have been submitted successfully.Please wait for someone to contact you about the missing item.");
  });
});
</script>

<body>
<form  action="formperfound_post.php" method=POST>
<div style="margin:10px">
    <h1><center>Fill this out</center></h1>
    Name of the finder<br>
    <input type="text" name="owner" required/>
    <br>
    Type of ID card<br>
    <input type="text" name="typeid" required/>
    <br>
    Mobile number<br>
    <input type="text" name="phone" required/>
    <br>
    Description:<br>
    <textarea rows="5" cols="30" name="des" ></textarea>
    <br>
    Location:<br>
    <input type="text" name="location"  placeholder="Specify the location you found it " />
    </div>
  
           </div>  
      <button type="submit" id="sub">Submit</button><br>
</div>
<div>
<a href="index2.php" class="btn btn-primary" style="margin:10px">Click here to go back to the login page</a>
</div>
      <?php
    $con=mysqli_connect("localhost","root","","iwtproject");
    $find_hackman=mysqli_query($con,"SELECT * FROM perfound");
    while($row=mysqli_fetch_assoc($find_hackman))
    {
     $own_name=$row['owner'];
     $typeid =$row['typeid'];
     $mobno =$row['phone'];
     $des =$row['des'];
     $location =$row['location'];

     echo"<p style='border: 1px solid black;padding: 1%;
     width: 100%;
     height: 120px;'Name:$own_name<br>
          Type of ID:$typeid<br>
          Mobile number:$mobno<br>
          Description:$des<br>
          Location:$location</p>";
            }
   
    ?>
      </form>
      
     

</body>
</html>

<?php  
 $con = mysqli_connect("localhost", "root", "", "iwtproject");  
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