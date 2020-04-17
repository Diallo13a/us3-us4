<?php
session_start();
include("recupjson.php");
include("fonction.php");

$_SESSION['prenom']='OUMAR';
$_SESSION['nom']='Diallo';
   // echo 'BIENVENUE '." ".$_SESSION['prenom']." ".$_SESSION['nom'].' SUR LA PLATFORME DE REPONSE AUX QCM ';
//include("fonction.php");
if (isset($_POST['envoi'])) {
                        session_unset();
                        session_destroy();
                        header('location:admin1.php');
                    
}


/*$dec=$_POST["bouton"];
if($_POST["bouton"]=="LOGOUT") //<input type="submit" name="bouton" value="LOGOUT">
{
    session_unset();
    session_destroy();
    echo "<h3> La session est terminée</h3> ";
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuil</title>
    <style>
    @media(min-width: 768px) and (max-width: 1388px)
    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: url("img-bg.jpg");
       
    }

    .alignement {
        margin-left: 30px;
    }

    .arrondire {
        border-radius: 5px 5px 5px 5px;
        height: 20px;
    }
    </style>
</head>

<body>
    <div style="width:100%; background-color:black; height:70px; margin-top:-10px">
        <div>
            <img src="logo-QuizzSA.png" alt="logoduquizz" width="40px" />
            <h2 style="margin-left:500px;margin-top:-50px; color:white;"> Le plaisir de jouer</h2>
        </div>
    </div>
    <!-- <p  style="color:white ;text-align:center;margin-top:-30px">Le plaisir de jouer</p> -->


    <div id="conteneur" style="background-color:white; width:85%; margin-left:100px;
     border-radius:10px 10px 10px 10px; margin-top:-10px; height:575px">
        <div id="bleue" style="background-color:#00FFFF ; height:60px">

        
            <div class="alignement">
            
                <p style="padding-top:20px; margin-left:300px;color:white;font-weight:bold">
               
                    CREER ET PARAMETRER VOS QUIZZ
                    <form action="" style="max-width:500px;margin:auto" method="post">
                    <button type="submit" name="envoi" id="envoi" class="btn" style="margin-left:670px;
                    background-color:#7FFFD4; color:white">Deconnexion</button>
                     </form>
                </p>
               
            </div>
       

        </div>
        <div id="gauche" style="width:30%; background-color:white; height:400px; margin-top:50px;border: 1px solid silver;border-radius:5px;">
            <div id="gauche_haut" style="background:linear-gradient(white,blue);height:150px">
                    
            </div>
            <a href="" target="" style="text-decoration:none">
            <div class="listequestions" style="background-color:white; height:30px;margin-top:30px;border: 1px solid silver">
               
                <div style="padding-top:5px">Liste Questions</div>
                <div class="ic-liste" style="margin-top:-22px">
                    <img src="ic-liste.ico" alt="icone_liste" style="width:20px;height:30px;margin-left:300px;">
                </div>
            </div>
            </a>

            <a href="" style="text-decoration:none">
            <div class="listequestions" style="background-color:white; height:30px;margin-top:30px;border: 1px solid silver">
               
                <div style="padding-top:5px">Créer Admin</div>
                <div class="ic-ajout" style="margin-top:-22px">
                    <img src="ic-ajout.ico" alt="icone_ajout" style="width:20px;height:30px;margin-left:300px;">
                </div>
            </div>
            </a>

            <a href="" style="text-decoration:none">
            <div class="listequestions" style="background-color:white; height:30px;margin-top:30px;border: 1px solid silver">
               
                <div style="padding-top:5px">Liste joueurs</div>
                <div class="ic-liste" style="margin-top:-22px">
                    <img src="ic-liste.ico" alt="icone_liste" style="width:20px;height:30px;margin-left:300px;">
                </div>
            </div>
            </a>

            <a href="" style="text-decoration:none">
            <div class="listequestions" style="background-color:white; height:30px;margin-top:30px;border: 1px solid silver">
               
                <div style="padding-top:5px">Créer Questions</div>
                <div class="ic-ajout" style="margin-top:-22px">
                    <img src="ic-ajout.ico" alt="icone_ajout" style="width:20px;height:30px;margin-left:300px;">
                </div>
            </div>
            </a>
                    
        </div>
        <div id="droite" style="width:65%; background-color:gray; height:465px; margin-top:-435px;margin-left:350px">
            <?php
           if(!isset($_GET['page'])) {
            $page = "joueur.php";
        } else {
            switch($_GET['page']) {
                case 'admin' :
                    $page = 'admin.php';
                break;
                /* etc */
                default:
                    $page = 'admin.php';
            }
            include($page);
        }
        
          
            ?>
        </div>

    </div>

</body>

</html>
<?php
 /*
    // On démarre la session
    session_start();
 
    if isset($_SESSION['ta_variable_de_connexion']) { // Si tu es connecté on te déconnecte et on te redirige vers une page.
 
        // Supression des variables de session et de la session
        $_SESSION = array();
        session_destroy();
 
        // Supression des cookies de connexion automatique
        setcookie('login', '');
        setcookie('pass_hache', '');
         
        header('Location: index.php?deco=1');
 
    }else{ // Dans le cas contraire on t'empêche d'accéder à cette page en te redirigeant vers la page que tu veux.
 
        header('Location: la_page_que_tu_veux.php');
 
    }
 
         
 */
?>