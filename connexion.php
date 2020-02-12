<?php
include 'db.php';
if(isset($_POST['login_button']) && $_POST['login_button']=="Valider"){

    $requete_mdp = $bdd->prepare('SELECT mdp,id_membre FROM membres WHERE pseudo = ?');
    $requete_mdp->execute([$_POST['pseudo']]);
    while($posted_mdp = $requete_mdp->fetch()){
        $mdp_bdd = $posted_mdp['mdp'];
        $id_membre = $posted_mdp['id_membre'];
    }
}
    if(hash('ripemd160', $_POST['mdp']."vive le projet tweet_academy") !== $mdp_bdd){
        header("Location: index.php");
        exit();
    }
    if(hash('ripemd160', $_POST['mdp']."vive le projet tweet_academy") == $mdp_bdd){
        session_start();
        $_SESSION['pseudo'] = $_POST['pseudo'];
        $_SESSION['id_membre'] = $id_membre;
        header("Location: accueil.php");
}
?>