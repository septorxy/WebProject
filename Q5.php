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

         echo "Successful Entry"; //Q5
     } //till here


     echo "Your name is ".$name;
     <br>
     echo "Your favorite food is ".$food;
     <br>
     echo "Your ID Card is ".$UserID;


     ?>


  </body>

</html>
