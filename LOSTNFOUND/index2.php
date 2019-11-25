<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login2.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
      header("location: login2.php");
      $author = mysqli_real_escape_string($db, $_POST['author']);
  }
?>
<title>MISSING SOMETHING?!</title>
    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style3.css">

<style>
body {
 background-image: url("background.png");
 background-color: #cccccc;
 background-repeat: no-repeat;
 background-size: 2000px 1500px;
}
</style>
</head>
<body>



<nav class="navbar  class="navbar navbar-light" style="background-color: #e3f2fd;"">
  <li class="nav-item">
  
    <a class="nav-link" href="index2.php?logout='1'" tabindex="-1" aria-disabled="true" style="color:black"><b>LOGOUT</b></a>
    
  </li>
</ul>
</nav>
<h1 style="padding:10px"><center><font color="white">
   MISSING SOMETHING?</font></center>
  </h1>
<div class="row">
  <div class="col-sm-4">
<div class="card" style="width: 18rem;">
  <img src="pet.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Missing your beloved one</h5>
    <p class="card-text">Take care of your best friend.</p>
    <a href="formpet.php" class="btn btn-primary">Find your pet</a>
  </div>
</div>
</div>

  <div class="col-sm-4">
<div class="card" style="width: 18rem;">
  <img src="ele.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Missing your favourite passtime</h5>
    <p class="card-text">Oh yes we know you love your gadgets so find them.</p>
    <a href="formelec.php" class="btn btn-primary">Find your gadget</a>
  </div>
</div>
</div>

  <div class="col-sm-4">
<div class="card" style="width: 18rem;">
  <img src="acc.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Missing the most precious thing</h5>
    <p class="card-text">Having a out of money experince?Get your money back!Find your wallet.</p>
    <a href="formacc.php" class="btn btn-primary">Find your accessories</a>
  </div>
  </div>
  </div>
</div>

        
</body>
</html>
