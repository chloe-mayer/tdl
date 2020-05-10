<?php
   
   $connexion=mysqli_connect('localhost','root','','tdl');
   date_default_timezone_set('Europe/Paris');
   $now = new DateTime();
   $date=$now->format('Y-m-d'); 
   if(isset($_GET['x']))
   {
       $sql="INSERT INTO liste (id, list, date_creation ) VALUES (NULL, '".$_GET['x']."', NOW()";
       var_dump($sql);
       $query=mysqli_query($connexion,$sql);
   }
   $sql="SELECT list, date_creation FROM liste WHERE id_utilisateurs = 1 ORDER by id DESC ";
   $query=mysqli_query($connexion,$sql);
  
   
   
   
   
        
    


?>

