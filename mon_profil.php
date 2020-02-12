<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/profil.css">
    <link rel="stylesheet" type="text/css" href="style/accueil.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CPermanent+Marker&display=swap" rel="stylesheet">
    <title>My_Twitter</title>
</head>
<body>
    <section>
    <?php
    session_start();
    include "db.php";
    include "profile_function.php";
    $statement2 = user_profile();
    $avatar_path = $statement2['avatar'];
    ?>
    <?php include "navbar.php"; ?>
        <div id="backround_user"></div>
        <div id="edit_bar">
        <?php echo '<img src="avatars/'.$avatar_path.'" alt="" id="photo_profil"/>'; ?>
            <div id="nbr_abonnement">
            <p>Abonnements</p>
            <p>0</p>
            </div>
            <button>Éditer le profil</button>
        </div>
    </section>
    <main>
        <?php
        echo $statement2['prenom'].' '.strtoupper($statement2['nom']);
        echo "<a href='accueil.php'>Accueil</a>";
        echo "<p>@".$_SESSION['pseudo']."</p>";
        echo "<p>Inscrit le ".$statement2['date_inscription']."</p>";
        ?>
        <form action="mon_profil.php" method="POST">
        <textarea name="tweet_content" rows="3" cols="60"></textarea>
        <input type="submit" name="tweet_button" value = "Tweet">
        </form>
        <?php include('tweet_traitement.php'); 
          $membre = $_SESSION['id_membre'];
          $requete = $bdd->query("SELECT
          tweets.*,
          pseudo,
          nom,
          prenom
        from
          tweets
          inner join membres on membres.id_membre = tweets.id_membre
          where membres.id_membre like $membre
        order by
          id_tweet desc
        ");
          while($requete_tweet = $requete->fetch()){
            echo "@".$requete_tweet['nom'].$requete_tweet['prenom'].$requete_tweet['pseudo'].$requete_tweet['tweet_date'].$requete_tweet['tweet_content']."<br>";
          }        
          ?>
    </main>

</body>