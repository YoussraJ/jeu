<?php 

session_start();
$boolean=false;
$timeout = 100;
    
    if (isset($_SESSION["id"])){
        if(session_status() != PHP_SESSION_ACTIVE)
            {
                if(isset($_COOKIE["account"])) {
                    $exp=explode(";", $_COOKIE["account"]);
                    
    
                        $email=$exp[0];
                        $password=$exp[1];
                        include("connexion.php");
                        $req="select * from user where email='$email' and password='$password'";
                        $res=$connexion->query($req);
                        $row=$res->FETCH_ASSOC();
                        if ($row){
                            
                            $_SESSION["id"]= $email;
                            header("location:annonce.php");
                        }
                        
                    

                }
                

             

            }
        }
        else
        { 
            header("location:index.php");

        }
    


    




?>