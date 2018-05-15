<?php
require_once('database.php'); 
session_start();
$_SESSION['pseudo'] = $_POST['pseudo'];
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE);
//$sql = "SELECT * FROM Questions";
$sql = "SELECT * FROM bachelor ORDER BY RAND();";
$result = mysqli_query($conn, $sql);
$res = mysqli_fetch_array($result);

//$val = $POST;
mysqli_close($conn);
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>SecretQuizz</title>
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
</head>
<body>
  <!-- main section -->
  <main>
    <!-- title and question -->
    <header>
      <h1><?php echo $_POST["pseudo"] ?> </br>
          <?php echo $res[1]; ?>
      </h1>
    </header>
    <!-- student choice -->
    <section>
         <form action="cible.php" methode="post">
        <!--    <input type="text" name="maValeur">. -->
     
            <article>
              <img src="http://res.cloudinary.com/dgif6wr5q/image/upload/v1518983198/pic0_nuaz7o.png">
              <buttom><?php echo $res[3];?></buttom>
            </article>
            <article>
              <img src="http://res.cloudinary.com/dgif6wr5q/image/upload/v1518983198/pic3_ua4huf.png">
              <buttom><?php echo $res[4];?></buttom>
            </article>
            <article>
              <img src="http://res.cloudinary.com/dgif6wr5q/image/upload/v1518983198/pic2_km994o.png">
              <buttom><?php echo $res[5];?></buttom>
            </article>
          </form>
    </section>


    <!-- footer with the score -->
    <footer>
      <span>Tu as pour l'instant 2 points.</span>
    </footer>
  </main>
</body>
</html>


