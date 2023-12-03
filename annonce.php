<?php
include ("check_session.php");
//echo session_save_path();
foreach($_SESSION as $key=>$val)
echo $val."<br>";
 
//echo $_SESSION["id"]; 
?>
<br>
<a href="ajout_annonce.php">Ajouter une annonce</a>
<a href="logout.php">Déconnexion</a>
