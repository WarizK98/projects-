<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>

<script>
       window.onload=function(){
    var today = new Date();
    var newdate = new Date();
    newdate.setDate(today.getDate()+7);
    document.write("<h1>THANK YOU. PLEASE RETURN THE BOOK BEFORE THE DUE DATE </h1>");
     document.write("<p>Due date on </p>"+ newdate);
   
}
</script>

       
</body>
</html>