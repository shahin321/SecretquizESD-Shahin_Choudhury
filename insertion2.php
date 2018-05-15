<?php
require_once('database.php'); 
 
  //récupération des valeurs des champs:
  //nom:
  $pseudo     = $_POST["pseudo"] ;

 
  //création de la requête SQL:
  $sql = "INSERT  INTO personnes (pseudo)
            VALUES ( '$pseudo') " ;
 

  //exécution de la requête SQL:
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE);

    //exécution de la requête SQL:
    $requete = mysqli_query($conn, $sql) ;
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
 
    if (isset($_POST["pseudo"]) == 1)
    header ('location : question.php');
    {
      $user = $_POST["pseudo"];
      $user = htmlspecialchars($user); 
      $_SESSION["pseudo"] = $user;  
      $sql = "INSERT  INTO  (pseudo) VALUES ( '$pseudo') " ; 
      $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE);
      $result = mysqli_query($conn, $sql);
      $res = mysqli_fetch_array($result);

      //$val = $POST;
      mysqli_close($conn);
    }
  //affichage des résultats, pour savoir si l'insertion a marchée:
  if($requete)
  {
    echo("L'insertion a été correctement effectuée") ;
  }
  else
  { 
    header('Location: question.php');
    echo("Vous êtes connecté") ;
    exit();
  }
?>

