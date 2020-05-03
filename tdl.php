<?
session_start();
if(!isset($_SESSION['login']))
{
	header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" type="image/x-icon" href="Logo.png">
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Amatic+SC:wght@700&family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
        <title> To Do List</title>
    </head>
    <body id="body-tdl">
        <main id="main-tdl">
            <section>
                <?php
                 
                 require "fonctions/function_tdl.php";
                 $var = new tdl;
                 
            
                ?>
                <h1> Ma To Do List</h1> 
                <article>
                    <div>  
                         Mes tâches
                    </div>
                    <div>
                        date de création
                    </div>
                    <div>
                        <h1>Tâche accomplie</h1>
                    </div>
                    <div>
                        <h1>Supprimer de la liste </h1>
                    </div>
                </article>
                <article>
                    <?php $var->affichage_tdl(); ?>
                    <div>
                        <img src="">C'est Fait</img>
                    </div>
                    <div>
                     <?php $var->delete_tdl() ?>
                    </div>
                </article>

                <article>
                    <div>
                        <h1>Tâches accomplies</h1> 
                    </div>
                    <div>
                        Affichage tache fini
                    </div>    
                </article>
                <article>
                    <form method="post">
                        <input type="text" name="ajout_tdl" value="ajout_tdl" placeholder="ajout_tdl"/>
                        <input type="submit" name="ajouter_tdl" value="AJOUTER"/>
                    </form> 
                </article>

            </section>
        
        </main>
   
    </body>

</html>