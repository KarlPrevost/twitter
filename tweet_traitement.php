<?php 
include 'db.php';
if(isset($_POST['tweet_button']) && $_POST['tweet_button']=="Tweet"){
    $requete = $bdd->prepare("INSERT INTO tweets (id_membre,tweet_content,tweet_date)  VALUES(?,?,NOW())");
    $requete->execute(array($_SESSION['id_membre'],$_POST['tweet_content']));
    $requete2 = $bdd->prepare("UPDATE membres SET nbr_tweet =  nbr_tweet + 1 where id_membre like ?");
    $requete2->execute(array($_SESSION['id_membre']));
}
?>
