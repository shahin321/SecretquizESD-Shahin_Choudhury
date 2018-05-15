<?php
require_once('database.php'); 
session_start();

if (isset($_POST["pseudo"]) == 1)
{
  $user = $_POST["pseudo"];
  $user = htmlspecialchars($user); 
  $sql = " INSERT  INTO  (pseudo) VALUES ( '$pseudo') " ; 
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE);
  $result = mysqli_query($conn, $sql);
  $res = mysqli_fetch_array($result);

  //$val = $POST;
  mysqli_close($conn);
}
  
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
<title>Secret Quiz ESD S</title>
</head>
<body>
      <h1>Bienvenue dans Secret Quiz ESD</h1>


   <div class="formulaire" >
      <p class="pseudo_game">
         Veuillez taper votre pseudo :
      </p>
      
      <form action="insertion.php" method="post">
         <p>
            <input type="text" name="pseudo" >
          </br></br>
            <input id="submit" type="submit" name="submit" value="JOUER">
          </br></br>
         </p>
      </form>
   </div>


</body>
</html>

