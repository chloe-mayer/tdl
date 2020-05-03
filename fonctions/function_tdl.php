<?php

class tdl 
{
        private $host = "localhost";
		private $username = "root";
		private $password = "";
        private $db = "tdl";
        

        public function affichage_tdl()
        {
            $connexion = mysqli_connect($this->host, $this->username, $this->password, $this->db);
            $sql = "SELECT * FROM liste WHERE id_utilisateurs = 1";
            $query = mysqli_query($connexion,$sql);
            ;
            
            while ($data = mysqli_fetch_assoc($query)) 
            {
                echo "<div>
                    <li>  
                        $data[list];
                    </li>
                  </div>
                  <div>
                        $data[date_creation];
                  </div>";
            }
            
            
            
            

        }

        public function delete_tdl()
        {
            $connexion = mysqli_connect($this->host, $this->username, $this->password, $this->db);
            $sql = "SELECT * FROM liste WHERE id_utilisateurs = 1";
            $query = mysqli_query($connexion, $sql);

            while ($data = mysqli_fetch_assoc($query)) 
            {
                
            
                
                ?>
                <a href="tdl.php?sup=<?php echo $data['id'] ;?>"><img width="200px" src="images/delete.png"></a>
                <?php 
                if(isset($_GET['sup']))
                {
                    $connexion =  mysqli_connect($this->host, $this->username, $this->password, $this->db);
                    $sql = "DELETE  FROM liste WHERE id = ".$_GET['sup'].";";
                    $resultat_supprimer = mysqli_query($connexion, $sql);
                    header('Location:tdl.php');
                }
            }
            


	        
        }

}



?>