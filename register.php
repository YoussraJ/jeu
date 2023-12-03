<?php

if(isset($_POST['register'])){
    echo "page register";
    $confirm_password = $_POST['comfirm_password']; 
    $email=$_POST['your_email'];
    $password=$_POST['password'];
    if ($password==$confirm_password){
    include("connexion.php");
    
    $req="insert into User (email, password) VALUES('$email','$password')";
    echo $host;
        if (!$connexion->query($req)){

            echo "insertion echouée";
        }
        else{
           session_start();           
            $val=session_id();
            $_SESSION["id"]= $val;
            $_SESSION["email"]=$email;           
            $arr=compact("email","password");
            $val=implode(";", $arr);
            setcookie("User", $val, time()+ (86400 * 30), NULL,NULL,FALSE,TRUE); // 86400 = 1 day

        header("location:annonce.php");        
        }
    }
    else{
        echo "Les deux mots de passe doivent etre identiques";
    }

}
?>