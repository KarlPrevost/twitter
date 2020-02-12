
<?php

function user_profile(){
    // session_start();
    include "db.php";
    $statement1 = $bdd->prepare("SELECT * from membres where pseudo = ?");
    $statement1->execute(array($_SESSION['pseudo']));
    $statement2 = $statement1->fetch();
    return $statement2;
}
?>