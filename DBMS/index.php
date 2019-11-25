<?php 
  session_start(); 
  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
      header("location: login.php");
      $author = mysqli_real_escape_string($db, $_POST['author']);
  }
?>
   
    <title>Home</title>
    <script src='//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
   
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <div class="header">
        <h2>Home Page</h2>
    </div>
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
            <h3>
                <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
            </h3>
        </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php  if (isset($_SESSION['username'])) : ?>
        <p><strong>WELCOME <?php echo $_SESSION['username']; ?></strong></p>
        <table style="width:100%">
        
       

            <h3>Third Semester</h3>
            <tr>
                <th>Book-ID</th>
                <th>Semester</th>
                <th>Subject</th>
                <th>Textbook</th>
                <th>Author</th>
                <th>Availability</th>
            </tr>
            
                <?php
                $con= mysqli_connect('localhost', 'root', '', 'library');
                                $sql = "SELECT * FROM library3";
                                $result = mysqli_query($con,$sql);
                                $count=1;
                                
                                while($rs = mysqli_fetch_array($result)){
                                    ?>
                <form action="add.php" method="get">
                    <tr>                                

                        <td><input size="5" type="text" name="id" value=<?php echo $rs['id']; ?> readonly /></td>
                        <td><input size="5" type="text" name="sem" value="<?php echo $rs['sem']; ?>" readonly/></td>
                        <td><input size ="35" type="text" name="name" value="<?php echo $rs['subject']; ?>" readonly/></td>
                        <td><input size="35" type="text" name="tb" value="<?php echo $rs['tb_name']; ?>" readonly/></td>
                        <td><input size="35" type="text" name="author" value="<?php echo $rs['author']; ?>" readonly></td>
                        <td>
                        <input type="text" class="input-group-button" name="count" size="2" placeholder="1" required />
                        <input type="submit" value="Add to Cart" class="btnAddAction" />
                        </td>
                    </tr>
                </form>
                                         
                                    
                                    
                <?php
                $count++;
                }
                ?>
            
           
            <tr>
                <th>
                    <h3>Fourth Semester</h3>
            </tr> 
            </th>
            <tr>
                <th>Book-ID</th>
                <th>Semester</th>
                <th>Subject</th>
                <th>Textbook</th>
                <th>Author</th>
                <th>Availability</th>
            </tr>
            <?php
                $con= mysqli_connect('localhost', 'root', '', 'library');
                                $sql = "SELECT * FROM library4";
                                $result = mysqli_query($con,$sql);
                                $count=1;
                                $ngo_ids = array();
                                while($rs = mysqli_fetch_array($result)){
                                    ?>
                <form action="add.php" method="get">
                    <tr>                                

                        <td><input size="5" type="text" name="id" value=<?php echo $rs['id']; ?> readonly /></td>
                        <td><input size="5" type="text" name="sem" value="<?php echo $rs['sem']; ?>" readonly/></td>
                        <td><input size ="35" type="text" name="name" value="<?php echo $rs['subject']; ?>" readonly/></td>
                        <td><input size="35" type="text" name="tb" value="<?php echo $rs['tb_name']; ?>" readonly/></td>
                        <td><input size="35" type="text" name="author" value="<?php echo $rs['author']; ?>" readonly></td>
                        <td>
                        <input type="text" class="input-group-button" name="count" size="2" placeholder="1" required />
                        <input type="submit" value="Add to Cart" class="btnAddAction" />
                        </td>
                    </tr>
                </form>
                                         
                                    
                                    
                <?php
                $count++;
                }
                ?>
            
            <tr>
                <th>
                    <h3>Fifth Semester</h3>
            <tr>
                <th>Book-ID</th>
                <th>Semester</th>
                <th>Subject</th>
                <th>Textbook</th>
                <th>Author</th>
                <th>Availability</th>
            </tr>
            </tr>
            </th>
            <?php
                $con= mysqli_connect('localhost', 'root', '', 'library');
                                $sql = "SELECT * FROM library5";
                                $result = mysqli_query($con,$sql);
                                $count=1;
                                $ngo_ids = array();
                                while($rs = mysqli_fetch_array($result)){
                                    ?>
                <form action="add.php" method="get">
                    <tr>                                

                        <td><input size="5" type="text" name="id" value=<?php echo $rs['id']; ?> readonly /></td>
                        <td><input size="5" type="text" name="sem" value="<?php echo $rs['sem']; ?>" readonly/></td>
                        <td><input size ="35" type="text" name="name" value="<?php echo $rs['subject']; ?>" readonly/></td>
                        <td><input size="35" type="text" name="tb" value="<?php echo $rs['tb_name']; ?>" readonly/></td>
                        <td><input size="35" type="text" name="author" value="<?php echo $rs['author']; ?>" readonly></td>
                        <td>
                        <input type="text" class="input-group-button" name="count" size="2" placeholder="1" required />
                        <input type="submit" value="Add to Cart" class="btnAddAction" />
                        </td>
                    </tr>
                </form>
                                         
                                    
                                    
                <?php
                $count++;
                }
                ?>
            
            <tr>
                <th>
                    <h3>Sixth Semester</h3>
            <tr>
                <th>Book-ID</th>
                <th>Semester</th>
                <th>Subject</th>
                <th>Textbook</th>
                <th>Author</th>
                <th>Availability</th>
            </tr>
            </tr>
            </th>
            <?php
                $con= mysqli_connect('localhost', 'root', '', 'library');
                                $sql = "SELECT * FROM library6";
                                $result = mysqli_query($con,$sql);
                                $count=1;
                                $ngo_ids = array();
                                while($rs = mysqli_fetch_array($result)){
                                    ?>
                <form action="add.php" method="get">
                    <tr>                                

                        <td><input size="5" type="text" name="id" value=<?php echo $rs['id']; ?> readonly /></td>
                        <td><input size="5" type="text" name="sem" value="<?php echo $rs['sem']; ?>" readonly/></td>
                        <td><input size ="35" type="text" name="name" value="<?php echo $rs['subject']; ?>" readonly/></td>
                        <td><input size="35" type="text" name="tb" value="<?php echo $rs['tb_name']; ?>" readonly/></td>
                        <td><input size="35" type="text" name="author" value="<?php echo $rs['author']; ?>" readonly></td>
                        <td>
                        <input type="text" class="input-group-button" name="count" size="2" placeholder="1" required />
                        <input type="submit" value="Add to Cart" class="btnAddAction" />
                        </td>
                    </tr>
                </form>
                                         
                                    
                                    
                <?php
                $count++;
                }
                ?>
            
            <tr>
                <th>
                    <h3>Seventh Semester</h3>
            </tr>
            </th>
            <tr>
                <th>Book-ID</th>
                <th>Semester</th>
                <th>Subject</th>
                <th>Textbook</th>
                <th>Author</th>
                <th>Availability</th>
            </tr>
            <?php
                $con= mysqli_connect('localhost', 'root', '', 'library');
                                $sql = "SELECT * FROM library7";
                                $result = mysqli_query($con,$sql);
                                $count=1;
                                $ngo_ids = array();
                                while($rs = mysqli_fetch_array($result)){
                                    ?>
                <form action="add.php" method="get">
                    <tr>                                

                        <td><input size="5" type="text" name="id" value=<?php echo $rs['id']; ?> readonly /></td>
                        <td><input size="5" type="text" name="sem" value="<?php echo $rs['sem']; ?>" readonly/></td>
                        <td><input size ="35" type="text" name="name" value="<?php echo $rs['subject']; ?>" readonly/></td>
                        <td><input size="35" type="text" name="tb" value="<?php echo $rs['tb_name']; ?>" readonly/></td>
                        <td><input size="35" type="text" name="author" value="<?php echo $rs['author']; ?>" readonly></td>
                        <td>
                        <input type="text" class="input-group-button" name="count" size="2" placeholder="1" required />
                        <input type="submit" value="Add to Cart" class="btnAddAction" />
                        </td>
                    </tr>
                </form>
                                         
                                    
                                    
                <?php
                $count++;
                }
                ?>
            
            <tr>
                <th>
                    <h3>Eighth Semester</h3>
            </tr>
            </th>
            <tr>
                <th>Book-ID</th>
                <th>Semester</th>
                <th>Subject</th>
                <th>Textbook</th>
                <th>Author</th>
                <th>Availability</th>
            </tr>
            <?php
                $con= mysqli_connect('localhost', 'root', '', 'library');
                                $sql = "SELECT * FROM library8";
                                $result = mysqli_query($con,$sql);
                                $count=1;
                                $ngo_ids = array();
                                while($rs = mysqli_fetch_array($result)){
                                    ?>
                <form action="add.php" method="get">
                    <tr>                                

                        <td><input size="5" type="text" name="id" value=<?php echo $rs['id']; ?> readonly /></td>
                        <td><input size="5" type="text" name="sem" value="<?php echo $rs['sem']; ?>" readonly/></td>
                        <td><input size ="35" type="text" name="name" value="<?php echo $rs['subject']; ?>" readonly/></td>
                        <td><input size="35" type="text" name="tb" value="<?php echo $rs['tb_name']; ?>" readonly/></td>
                        <td><input size="35" type="text" name="author" value="<?php echo $rs['author']; ?>" readonly></td>
                        <td>
                        <input type="text" class="input-group-button" name="count" size="2" placeholder="1" required />
                        <input type="submit" value="Add to Cart" class="btnAddAction" />
                        </td>
                    </tr>
                </form>
                                         
                                    
                                    
                <?php
                $count++;
                }
                ?>
            
        </table>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>
    </div>
</body>
</html>