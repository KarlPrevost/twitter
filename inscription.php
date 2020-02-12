<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/inscription.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CPermanent+Marker&display=swap" rel="stylesheet">
    <title>Twitter - Inscription</title>
</head>
<body>
    <header>

    </header>

    <aside>
    <a href="index.php"><img src="images/logo2.svg" alt="logo" height="200px" width="200px"/></a>
    </aside>

    <section>
    <div class="box-2">
    
    </div>
    <div class="box-1">
        <h1 class="deja-membre">Création de compte</h1>
        <form enctype="multipart/form-data" action ="inscription_traitement.php" method="post">
            <div class="Input">
                <label>Pseudonyme</label>
                <input type="text" placeholder="Nom de compte" class="Input-text" name="pseudo"  size="10" ><br>
            </div>
            <div class="Input">
                <label>Mot de passe</label>
                <input type="password" placeholder="Password" class="Input-text" name="mdp"  size="10" ><br><br><br>
            </div>
            <div class="Input">
                <label>Nom</label>
                <input type="text" placeholder="Nom" class="Input-text" name="nom"  size="10"><br>
            </div>
            <div class="Input">
                <label>Prénom</label>
                <input type="text" placeholder="Prénom" class="Input-text" name="prenom"  size="10" ><br>
            </div>
            <div class="Input">
                <label>Date de naissance</label>
                <input type="date" name="birth_date"  size="10 placeholder="date de naissance" class="Input-text" ><br>
            </div>
            <div class="Input">
                <label>Adresse E-mail</label>
                <input type="text" placeholder="jean-hugues@haribo.fr" class="Input-text" name="mail"  size="10 " ><br>
            </div>
            <div class="Input">
                <label>Numéro de téléphone</label>
                <input type="text" placeholder="060 XXX XXX" class="Input-text" name="tel"  size="10" ><br><br>
            </div>
            <div class="Input">
                <label for="photo" > Ajoutez une photo :<br /></label> 
                <input type="hidden" name="MAX_FILE_SIZE" value="2500000" /> 
            </div>
            <div class="Input">    
                <input type="file" name="avatar" /><br><br>
                <input type="submit" class="boutton-valider" name="inscription_button" value="Créer compte">
            </div>
        </form>
    </div>

    <div class="box-2">
        <!-- <h2 class="inscrivez-vous">Qui sommes nous ? </h2>
        <h3 class="oh">Nous sommes :<br><br>Karl<br>Julie<br>Yassine<br>Emilie<br>et Otto</h3> -->
    </div>
    </section>
</body>
</html>