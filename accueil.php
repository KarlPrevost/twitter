<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="/style/accueil.css">
  <link rel="stylesheet" type="text/css" href="/style/profil_accueil.css">
  <link rel="stylesheet" type="text/css" href="/style/tweetList.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
  <title>Accueil</title>
</head>
<body>

<?php 
session_start();
include "db.php";
include "profile_function.php";
$statement2 = user_profile();
$avatar_path = $statement2['avatar'];
?>
  <?php include "navbar.php"; ?>
<!-- Affichage de l'encadré de profil -->
  <div class="content">
    <div class="session_profil">
      <div class="nom_profil"><?php echo $_SESSION['pseudo']; ?></div>
      <br>
      <img width='200px' heigth='200px' src=<?php echo 'avatars/' . $avatar_path; ?>>
      <br>
      <br>
      <?php echo "@" . $statement2['nom'] . $statement2['prenom']; ?>
      <br>
      <br>
      <?php $nbr_tweet = $statement2['nbr_tweet'];
      echo "Tweets: $nbr_tweet";?>
    </div>
<!-- Affichage des tweets -->
    <div class="tweet-list">
      <div class="tweet">
        <form action="accueil.php" method="post">
        <label for="name">Poster un tweet  </label>
        <input type="text" name="tweet_content" required minlength="1" maxlength="140" size="80">
        <input type="submit" name="tweet_button" value="Tweet">
        </form>
      </div>
      <?php include('tweet_traitement.php'); 
          $requete = $bdd->query("SELECT
          tweets.*,
          pseudo,
          nom,
          prenom
        from
          tweets
          inner join membres on membres.id_membre = tweets.id_membre
        order by
          id_tweet desc
        ");
          while($requete_tweet = $requete->fetch()){
            echo "@".$requete_tweet['nom'].$requete_tweet['prenom'].$requete_tweet['pseudo'].$requete_tweet['tweet_date'].$requete_tweet['tweet_content']."<br>";
          }        
          ?>
    </div>
  </div>







</body>
</html>