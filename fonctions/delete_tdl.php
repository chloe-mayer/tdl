<?php

            $connexion = mysqli_connect('localhost','root','', 'tdl');
            $sql = "SELECT * FROM liste WHERE id_utilisateurs = 1";
            $query = mysqli_query($connexion, $sql);

            while ($data = mysqli_fetch_assoc($query)) 
            {
                
            
                
                ?>
                <a href="tdl.php?sup=<?php echo $data['id'] ;?>"><img width="200px" src="images/delete.png"></a>
                <?php 
                if(isset($_GET['sup']))
                {
                    $connexion =  mysqli_connect('localhost', 'root', '','tdl');
                    $sql = "DELETE  FROM liste WHERE id = ".$_GET['sup'].";";
                    $resultat_supprimer = mysqli_query($connexion, $sql);
                    header('Location:tdl.php');
                }
            }
?>          