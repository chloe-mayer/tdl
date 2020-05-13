<?php
   
   $idtest=1;

   $connexion=mysqli_connect('localhost','root','','tdl');
   date_default_timezone_set('Europe/Paris');
   $now = new DateTime();
   $date=$now->format('Y-m-d'); 
   if(isset($_GET['ajout_tdl']))
   {
       $sql="INSERT INTO liste (id_utilisateurs, list, date_creation, date_fin ) VALUES ($idtest,'".$_GET['ajout_tdl']."', '$date', '$date')";
       $query=mysqli_query($connexion,$sql);
   }
   $sql="SELECT list, date_creation FROM liste WHERE id_utilisateurs = 1 ORDER by id DESC ";
   $query=mysqli_query($connexion,$sql);
   while ($data = mysqli_fetch_assoc($query)) 
   {
       echo"<li>".$data['list']."".$data['date_creation']."</li>";   
   }     

?>

