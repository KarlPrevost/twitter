<?php
try
//mysql:host=localhost;dbname=id10164938_twitter;charset=utf8', 'root', '' 
//mysql:host=185.98.131.92;dbname=yassi1076271_1dpi;charset=utf8', 'yassi1076271_1dpi', 'wvfgf058ge'
            {
             $bdd = new PDO('mysql:host=localhost;dbname=twitter;charset=utf8', 'root', ''); // Hidden password on github
             $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(Exception $e)
            {
                die('Erreur : '.$e->getMessage());
            }
            $bdd->query("SET NAMES UTF8");
?>