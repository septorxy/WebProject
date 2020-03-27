<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

<!--Code in form and PHP code relating to GET method is copied from Q4-->
<!--Outputting Code is for Q5-->

  <body>

    <form method="GET">
        Enter Name
        <input type="text" name="person">
        Enter Favourite Food
        <input type="text" name="favFood">
        Enter your ID Number
        <input type="text" name="ID">
        <input type="submit" name="submit">
    </form>

     <?php
     //Copied from Q4
     if (isset($_GET['submit'])) {
         $name = $_GET['person'];
         $food = $_GET['favFood'];
         $UserID = $_GET['ID'];

         echo "<h1>Successful Entry<br></h1>"; //Q5
     } //till here

     echo "<h2>Your name is </h2> ".$name."<br>";

     echo "<h2>Your favorite food is</h2> ".$food."<br>";

     echo "<h2>Your ID Card is </h2>".$UserID."<br>";

     ?>


  </body>

</html>
