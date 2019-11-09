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
        
        <form action="add.php" method="get">

            <h3>Third Semester</h3>
            <tr>
                <th>Book-ID</th>
                <th>Semester</th>
                <th>Subject</th>
                <th>Textbook</th>
                <th>Author</th>
                <th>Availability</th>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id" value="301" readonly /></td>
                <td><input size="5"type="text" name="sem" value=" 3" readonly/></td>
                <td><input size="35" type="text" name="name" value=" Engineering Mathematics-III" readonly/></td>
                <td><input size="35" type="text" name="tb" value=" Higher Engineering Mathematics" readonly/></td>
                <td><input size="35" type="text" name="author" value=" B.S. Grewal" readonly></td>
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            
            <tr>
                <td><input size="5"type="text" name="id1" value="302" readonly /></td>
                <td><input size="5"type="text" name="sem1" value=" 3" readonly/></td>
                <td><input size="35" type="text" name="name1" value="Engineering Mathematics-III " readonly/></td>
                <td><input size="35" type="text" name="tb1" value="Higher Engineering Mathematics" readonly/></td>
                <td><input size="35" type="text" name="author1" value="H. K. Dass, Er. RajnishVerma" readonly></td>
                
                      <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id2" value="303" readonly /></td>
                <td><input size="5"type="text" name="sem2" value="3" readonly/></td>
                <td><input size="35" type="text" name="name2" value="Data Structures With Applications" readonly/></td>
                <td><input size="35" type="text" name="tb2" value="Fundamentals of Data Structures in C" readonly/></td>
                <td><input size="35" type="text" name="author2" value="Horowitz, Sahni, Anderson-Freed" readonly></td>
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id3" value="304" readonly /></td>
                <td><input size="5"type="text" name="sem3" value="3" readonly/></td>
                <td><input size="35" type="text" name="name3" value="Data Structures With Applications" readonly/></td>
                <td><input size="35" type="text" name="tb3" value="Approach of Data Structures" readonly/></td>
                <td><input size="35" type="text" name="author3" value="A.M Padma Reddy" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id4" value="305" readonly /></td>
                <td><input size="5"type="text" name="sem4" value="3" readonly/></td>
                <td><input size="35" type="text" name="name4" value="Object Oriented Programming With JAVA" readonly/></td>
                <td><input size="35" type="text" name="tb4" value="Java The Complete Reference" readonly/></td>
                <td><input size="35" type="text" name="author4" value="Herbert Schildt" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                 <td><input size="5"type="text" name="id5" value="306" readonly /></td>
                <td><input size="5"type="text" name="sem5" value="3" readonly/></td>
                <td><input size="35" type="text" name="name5" value="Object Oriented Programming With JAVA" readonly/></td>
                <td><input size="35" type="text" name="tb5" value="Introduction to JAVA Programming" readonly/></td>
                <td><input size="35" type="text" name="author5" value="Y. Daniel Liang" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                 <td><input size="5"type="text" name="id6" value="307" readonly /></td>
                <td><input size="5"type="text" name="sem6" value="3" readonly/></td>
                <td><input size="35" type="text" name="name6" value="Logic Design" readonly/></td>
                <td><input size="35" type="text" name="tb6" value="Digital Principles and Applications" readonly/></td>
                <td><input size="35" type="text" name="author6" value="Donald P Leach, Albert Paul Malvino&GoutamSaha" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id7" value="308" readonly /></td>
                <td><input size="5"type="text" name="sem7" value="3" readonly/></td>
                <td><input size="35" type="text" name="name7" value="Logic Design" readonly/></td>
                <td><input size="35" type="text" name="tb7" value="Illustrative Approach to Logic Design" readonly/></td>
                <td><input size="35" type="text" name="author7" value="R D Sudhaker Samuel" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id8" value="309" readonly /></td>
                <td><input size="5"type="text" name="sem8" value="3" readonly/></td>
                <td><input size="35" type="text" name="name8" value="Computer Organization" readonly/></td>
                <td><input size="35" type="text" name="tb8" value="Computer Organization" readonly/></td>
                <td><input size="35" type="text" name="autho81" value="Carl Hamacher, ZvonkoVranesic, SafwatZaky" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id9" value="310" readonly /></td>
                <td><input size="5"type="text" name="sem9" value="3" readonly/></td>
                <td><input size="35" type="text" name="name9" value="Computer Organization" readonly/></td>
                <td><input size="35" type="text" name="tb9" value="Computer Organization & Architecture" readonly/></td>
                <td><input size="35" type="text" name="author9" value=" William Stallings" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id10" value="311" readonly /></td>
                <td><input size="5"type="text" name="sem10" value="3" readonly/></td>
                <td><input size="35" type="text" name="name10" value="Discrete Mathematical Structures" readonly/></td>
                <td><input size="35" type="text" name="tb10" value="Discrete and Combinatorial Mathematics" readonly/></td>
                <td><input size="35" type="text" name="author10" value="Ralph P. Grimaldi" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id11" value="312" readonly /></td>
                <td><input size="5"type="text" name="sem11" value="3" readonly/></td>
                <td><input size="35" type="text" name="name11" value="Discrete Mathematical Structures" readonly/></td>
                <td><input size="35" type="text" name="tb11" value="A Treatise on Discrete Mathematical Structures" readonly/></td>
                <td><input size="35" type="text" name="author11" value="JayantGanguly" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
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
            <tr>
                <td><input size="5"type="text" name="id12" value="401" readonly /></td>
                <td><input size="5"type="text" name="sem12" value="4" readonly/></td>
                <td><input size="35" type="text" name="name12" value="Engineering Mathematics" readonly/></td>
                <td><input size="35" type="text" name="tb12" value="Higher Engineering Mathematics" readonly/></td>
                <td><input size="35" type="text" name="author12" value="B.S. Grewal" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id13" value="402" readonly /></td>
                <td><input size="5"type="text" name="sem13" value="4" readonly/></td>
                <td><input size="35" type="text" name="name13" value="Engineering Mathematics" readonly/></td>
                <td><input size="35" type="text" name="tb13" value="Advanced Engineering Mathematics" readonly/></td>
                <td><input size="35" type="text" name="author13" value="Erwin Kreyszig" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id14" value="403" readonly /></td>
                <td><input size="5"type="text" name="sem14" value="4" readonly/></td>
                <td><input size="35" type="text" name="name14" value="Design & Analysis of Algorithms" readonly/></td>
                <td><input size="35" type="text" name="tb14" value="Introduction to the Design & Analysis of Algorithms" readonly/></td>
                <td><input size="35" type="text" name="author14" value="Anany Levitin" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id15" value="404" readonly /></td>
                <td><input size="5"type="text" name="sem15" value="4" readonly/></td>
                <td><input size="35" type="text" name="name15" value="Design & Analysis of Algorithms" readonly/></td>
                <td><input size="35" type="text" name="tb15" value="Fundamentals of Computer Algorithms" readonly/></td>
                <td><input size="35" type="text" name="author15" value="Ellis Horowitz, Sartaj Sahni, Sanguthevar Rajasekaran" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id16" value="405" readonly /></td>
                <td><input size="5"type="text" name="sem16" value="4" readonly/></td>
                <td><input size="35" type="text" name="name16" value="Microprocessors and Microcontrollers" readonly/></td>
                <td><input size="35" type="text" name="tb16" value="The Intel Microprocessors" readonly/></td>
                <td><input size="35" type="text" name="author16" value="Barry B Brey" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id17" value="406" readonly /></td>
                <td><input size="5"type="text" name="sem17" value="4" readonly/></td>
                <td><input size="35" type="text" name="name17" value="Microprocessors and Microcontrollers" readonly/></td>
                <td><input size="35" type="text" name="tb17" value="The 8051 Microcontroller and Embedded Systems – using assembly and C" readonly/></td>
                <td><input size="35" type="text" name="author17" value="Muhammad Ali Mazidi and Janice Gillespie Mazidi and Rollin D. McKinlay" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id18" value="407" readonly /></td>
                <td><input size="5"type="text" name="sem18" value="4" readonly/></td>
                <td><input size="35" type="text" name="name18" value="Operating System" readonly/></td>
                <td><input size="35" type="text" name="tb18" value=" Operating System Principles" readonly/></td>
                <td><input size="35" type="text" name="author18" value="Abraham Silberschatz, Peter Baer Galvin, Greg Gagne" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id19" value="408" readonly /></td>
                <td><input size="5"type="text" name="sem19" value="4" readonly/></td>
                <td><input size="35" type="text" name="name19" value="Operating Syste" readonly/></td>
                <td><input size="35" type="text" name="tb19" value="Operating systems - A concept based Approach" readonly/></td>
                <td><input size="35" type="text" name="author19" value="D.M Dhamdhere" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id20" value="409" readonly /></td>
                <td><input size="5"type="text" name="sem20" value="4" readonly/></td>
                <td><input size="35" type="text" name="name20" value="Automata Theory And Formal Languages" readonly/></td>
                <td><input size="35" type="text" name="tb20" value="Introduction to Automata Theory, Languages and Computation" readonly/></td>
                <td><input size="35" type="text" name="author20" value="John E. Hopcroft, Rajeev Motwani, Jeffrey D.Ullman" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id21" value="410" readonly /></td>
                <td><input size="5"type="text" name="sem21" value="4" readonly/></td>
                <td><input size="35" type="text" name="name21" value="Automata Theory And Formal Languages" readonly/></td>
                <td><input size="35" type="text" name="tb21" value="Introduction to Languages and Automata Theory" readonly/></td>
                <td><input size="35" type="text" name="author21" value="John C Martin" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id22" value="411" readonly /></td>
                <td><input size="5"type="text" name="sem22" value="4" readonly/></td>
                <td><input size="35" type="text" name="name22" value="Linux System Programming" readonly/></td>
                <td><input size="35" type="text" name="tb22" value="Linux System Programming" readonly/></td>
                <td><input size="35" type="text" name="author22" value="Robert Love" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id23" value="412" readonly /></td>
                <td><input size="5"type="text" name="sem23" value="4" readonly/></td>
                <td><input size="35" type="text" name="name23" value="Linux System Programming" readonly/></td>
                <td><input size="35" type="text" name="tb23" value="Linux Fundamentals" readonly/></td>
                <td><input size="35" type="text" name="author23" value="Paul Cobbaut" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
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
            <tr>
                <td><input size="5"type="text" name="id24" value="501" readonly /></td>
                <td><input size="5"type="text" name="sem24" value="5" readonly/></td>
                <td><input size="35" type="text" name="name24" value="Management and Entrepreneurship" readonly/></td>
                <td><input size="35" type="text" name="tb24" value="Principles of Management" readonly/></td>
                <td><input size="35" type="text" name="author24" value="P.C.Tripathi, P.N.Reddy" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                <td><input size="5"type="text" name="id25" value="502" readonly /></td>
                <td><input size="5"type="text" name="sem25" value="5" readonly/></td>
                <td><input size="35" type="text" name="name25" value="Management and Entrepreneurship" readonly/></td>
                <td><input size="35" type="text" name="tb25" value="Management & Entrepreneurship" readonly/></td>
                <td><input size="35" type="text" name="author25" value="N V R Naidu" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                 <td><input size="5"type="text" name="id26" value="503" readonly /></td>
                <td><input size="5"type="text" name="sem26" value="5" readonly/></td>
                <td><input size="35" type="text" name="name26" value="Computer Networks" readonly/></td>
                <td><input size="35" type="text" name="tb26" value="Data Communication and Networking" readonly/></td>
                <td><input size="35" type="text" name="author26" value="Behrouz A. Forouzan" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id27" value="504" readonly /></td>
                <td><input size="5"type="text" name="sem27" value="5" readonly/></td>
                <td><input size="35" type="text" name="name27" value="Computer Networks" readonly/></td>
                <td><input size="35" type="text" name="tb27" value="Data and Computer Communication" readonly/></td>
                <td><input size="35" type="text" name="author27" value="William Stallings" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>

            <tr>
                                <td><input size="5"type="text" name="id28" value="505" readonly /></td>
                <td><input size="5"type="text" name="sem28" value="5" readonly/></td>
                <td><input size="35" type="text" name="name28" value="Database Management Systems" readonly/></td>
                <td><input size="35" type="text" name="tb28" value="An Introduction to Database Systems" readonly/></td>
                <td><input size="35" type="text" name="author28" value="C.J. Date, A. Kannan, S. Swamynatham" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id29" value="506" readonly /></td>
                <td><input size="5"type="text" name="sem29" value="5" readonly/></td>
                <td><input size="35" type="text" name="name29" value="Database Management Systems" readonly/></td>
                <td><input size="35" type="text" name="tb29" value="Fundamentals of Database Systems" readonly/></td>
                <td><input size="35" type="text" name="author29" value="Elmasri and Navathe" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id30" value="507" readonly /></td>
                <td><input size="5"type="text" name="sem30" value="5" readonly/></td>
                <td><input size="35" type="text" name="name30" value="Software Engineering" readonly/></td>
                <td><input size="35" type="text" name="tb30" value="Software Engineering" readonly/></td>
                <td><input size="35" type="text" name="author30" value="Ian Sommerville" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id31" value="508" readonly /></td>
                <td><input size="5"type="text" name="sem31" value="5" readonly/></td>
                <td><input size="35" type="text" name="name31" value="Software Engineering" readonly/></td>
                <td><input size="35" type="text" name="tb31" value="Software Engineering-A Practitioners approach" readonly/></td>
                <td><input size="35" type="text" name="author31" value="Roger.S.Pressman" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id32" value="509" readonly /></td>
                <td><input size="5"type="text" name="sem32" value="5" readonly/></td>
                <td><input size="35" type="text" name="name32" value="Artificial Intelligence" readonly/></td>
                <td><input size="35" type="text" name="tb32" value="Artificial Intelligence A Modern Approach" readonly/></td>
                <td><input size="35" type="text" name="author32" value="Stuart Russel, Peter Norvig" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id33" value="510" readonly /></td>
                <td><input size="5"type="text" name="sem33" value="5" readonly/></td>
                <td><input size="35" type="text" name="name33" value="Artificial Intelligence" readonly/></td>
                <td><input size="35" type="text" name="tb33" value="Artificial Intelligence" readonly/></td>
                <td><input size="35" type="text" name="author33" value="Elaine Rich, Kevin Knight" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id34" value="511" readonly /></td>
                <td><input size="5"type="text" name="sem34" value="5" readonly/></td>
                <td><input size="35" type="text" name="name34" value="Mobile Application Development" readonly/></td>
                <td><input size="35" type="text" name="tb34" value="Android Programming: The Big Nerd Ranch Guide" readonly/></td>
                <td><input size="35" type="text" name="author34" value="Brian Hardy, Bill Phillips" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id35" value="512" readonly /></td>
                <td><input size="5"type="text" name="sem35" value="5" readonly/></td>
                <td><input size="35" type="text" name="name35" value="Mobile Application Development" readonly/></td>
                <td><input size="35" type="text" name="tb35" value="Hello, Android: Introducing Google's Mobile Development Platform" readonly/></td>
                <td><input size="35" type="text" name="author35" value="Ed Burnette" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
            <td><input size="5"type="text" name="id36" value="513" readonly /></td>
                <td><input size="5"type="text" name="sem36" value="5" readonly/></td>
                <td><input size="35" type="text" name="name36" value="Advanced Java" readonly/></td>
                <td><input size="35" type="text" name="tb36" value="J2EE- The Complete Reference" readonly/></td>
                <td><input size="35" type="text" name="author36" value="Jim Keogh" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
            <td><input size="5"type="text" name="id37" value="514" readonly /></td>
                <td><input size="5"type="text" name="sem37" value="5" readonly/></td>
                <td><input size="35" type="text" name="name37" value="Advanced Java" readonly/></td>
                <td><input size="35" type="text" name="tb37" value="The J2EE Tutorial" readonly/></td>
                <td><input size="35" type="text" name="author37" value="Stephanie Bodoffetal" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
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
            <tr>
                                <td><input size="5"type="text" name="id38" value="601" readonly /></td>
                <td><input size="5"type="text" name="sem38" value="6" readonly/></td>
                <td><input size="35" type="text" name="name38" value="Internet and Web Technologies" readonly/></td>
                <td><input size="35" type="text" name="tb38" value="Programming the World Wide Web" readonly/></td>
                <td><input size="35" type="text" name="author38" value="Robert W. Sebesta" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id39" value="602" readonly /></td>
                <td><input size="5"type="text" name="sem39" value="6" readonly/></td>
                <td><input size="35" type="text" name="name39" value="Internet and Web Technologies" readonly/></td>
                <td><input size="35" type="text" name="tb39" value="Internet & World Wide WebHow to Program" readonly/></td>
                <td><input size="35" type="text" name="author39" value="M. Deitel, P.J. Deitel, A. B. Goldberg" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id40" value="603" readonly /></td>
                <td><input size="5"type="text" name="sem40" value="6" readonly/></td>
                <td><input size="35" type="text" name="name40" value="Compiler Design" readonly/></td>
                <td><input size="35" type="text" name="tb40" value="Compilers- Principles, Techniques and Tools" readonly/></td>
                <td><input size="35" type="text" name="author40" value="Alfred V Aho, Monica S.Lam, Ravi Sethi, Jeffrey D Ullman" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
                            <td><input size="5"type="text" name="id41" value="604" readonly /></td>
                <td><input size="5"type="text" name="sem41" value="6" readonly/></td>
                <td><input size="35" type="text" name="name41" value="Compiler Design" readonly/></td>
                <td><input size="35" type="text" name="tb41" value="Crafting a Compiler with C" readonly/></td>
                <td><input size="35" type="text" name="author41" value="Charles N. Fischer, Richard J. leBlanc, Jr." readonly></td>
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id42" value="605" readonly /></td>
                <td><input size="5"type="text" name="sem42" value="6" readonly/></td>
                <td><input size="35" type="text" name="name42" value="Computer Graphics & Visualization" readonly/></td>
                <td><input size="35" type="text" name="tb42" value="Interactive Computer Graphics A Top-Down Approach with OpenGL" readonly/></td>
                <td><input size="35" type="text" name="author42" value="Edward Angel" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id43" value="606" readonly /></td>
                <td><input size="5"type="text" name="sem43" value="6" readonly/></td>
                <td><input size="35" type="text" name="name43" value="Computer Graphics & Visualization" readonly/></td>
                <td><input size="35" type="text" name="tb43" value="Computer Graphics- OpenGL Version" readonly/></td>
                <td><input size="35" type="text" name="author43" value="Donald Hearn and Pauline Baker" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id44" value="607" readonly /></td>
                <td><input size="5"type="text" name="sem44" value="6" readonly/></td>
                <td><input size="35" type="text" name="name44" value="Cloud & Big Data Applications" readonly/></td>
                <td><input size="35" type="text" name="tb44" value="Cloud Computing Theory and Practice" readonly/></td>
                <td><input size="35" type="text" name="author44" value="Dan C Marinescu" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id45" value="608" readonly /></td>
                <td><input size="5"type="text" name="sem45" value="6" readonly/></td>
                <td><input size="35" type="text" name="name45" value="Cloud & Big Data Applications" readonly/></td>
                <td><input size="35" type="text" name="tb45" value="Hadoop: The Definitive Guide" readonly/></td>
                <td><input size="35" type="text" name="author45" value="Tom White" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id46" value="609" readonly /></td>
                <td><input size="5"type="text" name="sem46" value="6" readonly/></td>
                <td><input size="35" type="text" name="name46" value="Internet Of Things" readonly/></td>
                <td><input size="35" type="text" name="tb46" value="Internet of Things – A hands-on approach" readonly/></td>
                <td><input size="35" type="text" name="author46" value="Arshdeep Bahga, Vijay Madisetti" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id47" value="610" readonly /></td>
                <td><input size="5"type="text" name="sem47" value="6" readonly/></td>
                <td><input size="35" type="text" name="name47" value="Internet Of Things" readonly/></td>
                <td><input size="35" type="text" name="tb47" value="Computer networking : a top-down approach" readonly/></td>
                <td><input size="35" type="text" name="author47" value="Kurose, James F.; Ross, Keith W." readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id48" value="611" readonly /></td>
                <td><input size="5"type="text" name="sem48" value="6" readonly/></td>
                <td><input size="35" type="text" name="name48" value="Cyber Security" readonly/></td>
                <td><input size="35" type="text" name="tb48" value="Cryptography, Network Security and Cyber Laws" readonly/></td>
                <td><input size="35" type="text" name="author48" value="Bernard Menezes" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id49" value="612" readonly /></td>
                <td><input size="5"type="text" name="sem49" value="49" readonly/></td>
                <td><input size="35" type="text" name="name49" value="Cyber Security" readonly/></td>
                <td><input size="35" type="text" name="tb49" value="Cryptography and Network Security" readonly/></td>
                <td><input size="35" type="text" name="author49" value="Behrouz A Forouzan, Debdeep Mukhopadhyay" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
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
            <tr>
                                <td><input size="5"type="text" name="id50" value="701" readonly /></td>
                <td><input size="5"type="text" name="sem50" value="7" readonly/></td>
                <td><input size="35" type="text" name="name50 value="Machine learning" readonly/></td>
                <td><input size="35" type="text" name="tb50" value="Machine learning" readonly/></td>
                <td><input size="35" type="text" name="author50" value="Tom M. Mitchell" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id51" value="702" readonly /></td>
                <td><input size="5"type="text" name="sem51" value="7" readonly/></td>
                <td><input size="35" type="text" name="name51" value="Machine learning" readonly/></td>
                <td><input size="35" type="text" name="tb51" value="Data Mining Concepts and Techniques" readonly/></td>
                <td><input size="35" type="text" name="author51" value="Jian Pei, Elsevier" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id52" value="703" readonly /></td>
                <td><input size="5"type="text" name="sem52" value="7" readonly/></td>
                <td><input size="35" type="text" name="name52" value="Object oriented and design" readonly/></td>
                <td><input size="35" type="text" name="tb52" value="Object-Oriented Modeling and Design with UML" readonly/></td>
                <td><input size="35" type="text" name="author52" value="Michael Blaha, James Rumbaugh" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id53" value="704" readonly /></td>
                <td><input size="5"type="text" name="sem53" value="7" readonly/></td>
                <td><input size="35" type="text" name="name53" value="Object oriented and design" readonly/></td>
                <td><input size="35" type="text" name="tb53" value="Pattern-Oriented Software Architecture" readonly/></td>
                <td><input size="35" type="text" name="author53" value="Frank Buschmann, Regine Meunier, Hans Rohnert, Peter Sommerlad, Michael Stal" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id54" value="705" readonly /></td>
                <td><input size="5"type="text" name="sem54" value="7" readonly/></td>
                <td><input size="35" type="text" name="name54" value="System modeling and simulation" readonly/></td>
                <td><input size="35" type="text" name="tb54" value="Discrete Event system Simulation" readonly/></td>
                <td><input size="35" type="text" name="author54" value="Jerry Banks, John S Carson, II, Berry L Nelson, David M Nicol" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id55" value="706" readonly /></td>
                <td><input size="5"type="text" name="sem55" value="7" readonly/></td>
                <td><input size="35" type="text" name="name55" value="Embedded computer system" readonly/></td>
                <td><input size="35" type="text" name="tb55" value="Computers as Components, Principles of EmbeddedComputing Systems Design" readonly/></td>
                <td><input size="35" type="text" name="author55" value="Wayne Wolf" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id56" value="707" readonly /></td>
                <td><input size="5"type="text" name="sem56" value="7" readonly/></td>
                <td><input size="35" type="text" name="name56" value="Embedded computer system" readonly/></td>
                <td><input size="35" type="text" name="tb56" value="Introduction to Embedded Systems" readonly/></td>
                <td><input size="35" type="text" name="author56" value="Shibu K V" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id57" value="708" readonly /></td>
                <td><input size="5"type="text" name="sem57" value="7" readonly/></td>
                <td><input size="35" type="text" name="name57" value="IoT" readonly/></td>
                <td><input size="35" type="text" name="tb57" value="IoT Fundamentals: Networking Technologies" readonly/></td>
                <td><input size="35" type="text" name="author57" value="David Hanes, Gonzalo Salgueiro, Patrick Grossetete, Robert Barton, Jerome Henry" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id58" value="709" readonly /></td>
                <td><input size="5"type="text" name="sem58" value="7" readonly/></td>
                <td><input size="35" type="text" name="name58" value="IoT" readonly/></td>
                <td><input size="35" type="text" name="tb58" value="Internet of Things – A hands-on approach" readonly/></td>
                <td><input size="35" type="text" name="author58" value="ArshdeepBahga, Vijay Madisett " readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id59" value="710" readonly /></td>
                <td><input size="5"type="text" name="sem59" value="7" readonly/></td>
                <td><input size="35" type="text" name="name59" value="Data structure with c" readonly/></td>
                <td><input size="35" type="text" name="tb59" value="Fundamentals of Data Structures in C" readonly/></td>
                <td><input size="35" type="text" name="author59" value="Horowitz, Sahni, Anderson-Freed " readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
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
            <tr>
                                <td><input size="5"type="text" name="id60" value="801" readonly /></td>
                <td><input size="5"type="text" name="sem60" value="8" readonly/></td>
                <td><input size="35" type="text" name="name60" value="Information and network security" readonly/></td>
                <td><input size="35" type="text" name="tb60" value="Principles of Information Security" readonly/></td>
                <td><input size="35" type="text" name="author60" value="Michael E. Whitman and Herbert J. Mattord" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id61" value="802" readonly /></td>
                <td><input size="5"type="text" name="sem61" value="8" readonly/></td>
                <td><input size="35" type="text" name="name61" value="Information and network security" readonly/></td>
                <td><input size="35" type="text" name="tb61" value="Network Security Essentials: Applications and Standards" readonly/></td>
                <td><input size="35" type="text" name="author61" value="William Stalling" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id62" value="803" readonly /></td>
                <td><input size="5"type="text" name="sem62" value="8" readonly/></td>
                <td><input size="35" type="text" name="name62" value="Business intelligence" readonly/></td>
                <td><input size="35" type="text" name="tb62" value="Business Intelligence Roadmap : The Complete Project Lifecycle for Decision Support Applications" readonly/></td>
                <td><input size="35" type="text" name="author62" value="Larissa T Moss and ShakuAtre" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id63" value="804" readonly /></td>
                <td><input size="5"type="text" name="sem63" value="8" readonly/></td>
                <td><input size="35" type="text" name="name63" value="Business intelligence" readonly/></td>
                <td><input size="35" type="text" name="tb63" value="Fundamentals of Business Analytics" readonly/></td>
                <td><input size="35" type="text" name="author63" value="R N Prasad, SeemaAcharya" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id64" value="805" readonly /></td>
                <td><input size="5"type="text" name="sem64" value="8" readonly/></td>
                <td><input size="35" type="text" name="name64" value="Advanced database systems" readonly/></td>
                <td><input size="35" type="text" name="tb64" value="Database Management Systems" readonly/></td>
                <td><input size="35" type="text" name="author64" value="Raghu Ramakrishnan and Johannes Gehrke" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id65" value="806" readonly /></td>
                <td><input size="5"type="text" name="sem65" value="8" readonly/></td>
                <td><input size="35" type="text" name="name65" value="Advanced database systems" readonly/></td>
                <td><input size="35" type="text" name="tb65" value="Fundamentals of Database Systems" readonly/></td>
                <td><input size="35" type="text" name="author65" value="Elmasri and Navathe" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id66" value="807" readonly /></td>
                <td><input size="5"type="text" name="sem66" value="8" readonly/></td>
                <td><input size="35" type="text" name="name66" value="Real time operating systems" readonly/></td>
                <td><input size="35" type="text" name="tb66" value="Real Time Systems" readonly/></td>
                <td><input size="35" type="text" name="author66" value="C. M. Krishna, Kang. G. Shin" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id67" value="808" readonly /></td>
                <td><input size="5"type="text" name="sem67" value="8" readonly/></td>
                <td><input size="35" type="text" name="name67" value="Programming in python" readonly/></td>
                <td><input size="35" type="text" name="tb67" value="Practical Programming: An Introduction to Computer Science Using Python 3" readonly/></td>
                <td><input size="35" type="text" name="author67" value="Jennifer Campbell, Jason Montojo" readonly></td>
                
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            <tr>
                                <td><input size="5"type="text" name="id68" value="809" readonly /></td>
                <td><input size="5"type="text" name="sem68" value="8" readonly/></td>
                <td><input size="35" type="text" name="name68" value="Programming in python" readonly/></td>
                <td><input size="35" type="text" name="tb68" value="Beginning Python: Using Python 2.6 and Python 3" readonly/></td>
                <td><input size="35" type="text" name="author68" value="James Payne" readonly></td>
               
                <td>
                    <input type="text" class="input-group-button"  value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
                    
                </td>
            </tr>
            </form>
        </table>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>
    </div>

</body>

</html>