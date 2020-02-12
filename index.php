<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/index.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CPermanent+Marker&display=swap" rel="stylesheet">
    <title>My_Twitter</title>
</head>
<body>
    <header>


    </header>
    <aside>
    <a href="index.php"><img src="images/logo2.svg" alt="logo" height="200px" width="200px"/></a>
    </aside>
    <section class="section-1">
            <div class="box-1">
                <h1 class="deja-membre">Deja membre ?</h1>
                <form action ="connexion.php" method="post">
                    <h2>Conectez-vous</h2>
                    <div class="Input">
                        <label>Pseudo</label>
                        <input type="text" name="pseudo"  size="10" placeholder="Nom de compte" class="Input-text" ><br>
                    </div>
                    <div class="Input">
                        <label>Password</label>
                        <input type="password" name="mdp"  size="10" placeholder="Mot de passe" class="Input-text" >

                    </div>
                    <input type="submit" class="boutton-valider" name="login_button" value ="Valider">
                </form>
            </div>

            <div class="box-2">
                <h2 class="oh">Oh ! mais vouns n'avez pas de compte ? </h2>
                <h1 class="inscrivez-vous">Inscrivez vous <a href="inscription.php">Ici</a> !<h1>
            </div>

    </section>
</body>
</html>