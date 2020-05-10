
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" type="image/x-icon" href="Logo.png">
        <link href="https://fonts.googleapis.com/css2?family=Acme&family=Amatic+SC:wght@700&family=Yanone+Kaffeesatz:wght@500&display=swap" rel="stylesheet">
        <script type="text/javascript" src="tdl.js" async="true"></script>
        <title> To Do List</title>
    </head>
    <body id="body-tdl">
        <main id="main-tdl">
        <?php
            session_start();
            //if(!isset($_SESSION['login']))
            {
                //header('Location: ../index.php');
            }
            $connexion=mysqli_connect('localhost','root','','tdl');
            $sql="SELECT list, date_creation FROM liste WHERE id_utilisateurs = 1 ORDER by id DESC ";
            $query=mysqli_query($connexion,$sql);
            



        ?>
            <section>
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
                        <input type="text" id="ajout_tdl" name="ajout_tdl"  placeholder="ajout_tdl"/>
                        <button onclick="envoi_affichagebdd()">Nouvelle Tâche</button>
                </article>
                <article>
                    <div>
                        <ul id="affiche_tdl">
                            <?php
                                    while ($data = mysqli_fetch_assoc($query)) 
                                    {
                                        echo"<li>".$data['list']."".$data['date_creation']."</li>";   
                                    }
                                
                                                   
		                    ?>
                                    
                            
                        

                        </ul>
                        
                    </div>
                     affichage tdl
                    <div>
                        <img src="">C'est Fait</img>
                    </div>
                    <div>
                    </div>
                </article>

                <article>
                    <div id="tache_accomplie">
                        <h1>Tâches accomplies</h1> 
                    </div>
                    <div>
                        Affichage tache fini
                    </div>    
                </article>
               

            </section>
        
        </main>
   
    </body>

</html>