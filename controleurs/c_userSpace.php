<?php
if(!isset($_REQUEST['co'])){
    $co = 'co';}
else{
    $co = $_REQUEST["co"];
}
switch ($co){
    case "co":
        include 'vues/v_connexion.php';
        break;
    case "connexion": 
        $post_pseudo = filter_input(INPUT_POST, 'champLogin');
        $post_password = filter_input(INPUT_POST, 'champMdp');
        if($post_pseudo == "" || $post_password == ""){
            $message = "Veuillez renseigner tous les champs";
            include 'vues/v_connexion.php';
        }
        else{
            $verif = $pdo->verifPassword($post_pseudo, $post_password);
            if(!$verif){
                $message = 'VOUS N ETES PAS CONNECTE ECHEC !!';
                include 'vues/v_connexion.php';
            }
            else{
                $message ="Vous etes connecté, bravo.";
                include 'vues/v_connexion.php';
            }
        }
        break;
    case "creation":
        include 'vues/v_creation.php';
        break;
    case "reset":
        break;
        
}

