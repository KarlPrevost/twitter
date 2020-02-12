<?php 
include 'db.php';

if(isset($_FILES['avatar']))
{ 
     $dossier = 'avatars/';
     $fichier = basename($_FILES['avatar']['name']);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE)
     {
          echo 'Echec de l\'upload !';
     }
}

if(isset($_POST['inscription_button']) && $_POST['inscription_button']=="Créer compte"){
    $mdp = hash('ripemd160',$_POST['mdp']."vive le projet tweet_academy");
    $requete = $bdd->prepare("SELECT pseudo FROM membres WHERE pseudo LIKE ?");
    $requete->execute([$_POST['pseudo']]);
    $verif = $requete->fetch()['pseudo'];
        if($_POST['pseudo'] == $verif){
            header('Location: inscription.php');
            }
        else{
            $requete = $bdd->prepare("INSERT INTO membres (nom,prenom,pseudo,birth_date,mdp,mail,tel,nbr_tweet,avatar ,date_inscription)  VALUES(?,?,?,?,?,?,?,0,?,NOW())");
            $requete->execute(array($_POST['nom'],$_POST['prenom'],$_POST['pseudo'],$_POST['birth_date'],$mdp,$_POST['mail'],$_POST['tel'],$fichier));
            echo "Connection réussie";
        }
    }



?>