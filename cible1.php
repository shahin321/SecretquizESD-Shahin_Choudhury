<?php
  require_once('database.php'); 
  session_start();
  $_SESSION['pseudo'] = $_POST['pseudo'];
  //récupération des valeurs des champs:
  //pseudo
  $pseudo  = $_POST["pseudo"] ;

  //création de la requête SQL:
  $sql1 ="SELECT * FROM bachelor ORDER BY RAND();";
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE);

  //exécution de la requête SQL:
  $requete = mysqli_query($conn, $sql, $sql1) ;
  $res = mysqli_fetch_array($result);

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
      <h2 style="text-align: right; width: 500px;"><?php echo $_POST["pseudo"] ?></h2> </br> </br>
      <h1><?php echo $res[1]; ?></h1>
    </header>
    <!-- student choice -->
    <section>
        <!--  <form acrtion="index.php" methode="post">
           <input type="text" name="maValeur">. -->

            <article>
              <img src="photos/Augustin.png">
              <buttom><?php echo $res[3];?></buttom>
            </article>
            <article>
              <img src="photos/AMW.png">
              <buttom><?php echo $res[4];?></buttom>
            </article>
            <article>
              <img src="photos/Doug.png">
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