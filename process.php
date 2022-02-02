<?php

    if(isset($_POST['btn-send'])){
        
        $UserName=$_POST['UName'];
        $Email=$_POST['Email'];
        $Subjet=$_POST['Subject'];
        $Msg=$_POST['msg'];

        //Simple Validation To check The input Fields
        if(empty($UserName) || empty($Email) || empty($Subjet) || empty($Msg)){
            
            header('location:index.php?error');
        }else {

            $to = "mahmood_alfoqahaa@yahoo.com";

            if(mail($to,$Subjet,$Msg)){

                header('location:index.php?success');
            }
        }

    }else {
        
        header('location:index.php');
    }


?>