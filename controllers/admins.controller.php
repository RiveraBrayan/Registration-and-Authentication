<?php

include_once '../models/admins.models.php';

class AdminsController{
    public function sign_in(){
         if(isset($_POST['frmEmail']) && isset($_POST['frmPassword'])){
            $email = $_POST['frmEmail'];
            $password = $_POST['frmPassword'];

            $sign_in = new AdminsModels();
            $result = $sign_in->sign_in($email, $password);

            if ($result == 200) {
                header('Location: home.php');
                exit();
            } else if ($result == 404) {
                echo '<script>
                        alert("Wrong Password");
                    </script>';
            }
         }
    }

    public function sign_up(){
         if(isset($_POST['frmEmail']) && isset($_POST['frmPassword'])){
            $email = $_POST['frmEmail'];
            $password = $_POST['frmPassword'];

            $sign_in = new AdminsModels();
            $result = $sign_in->sign_up($email, $password);

            if ($result == 200) {
                header('Location: sign_in.php');
            } else if ($result == 404) {
                echo '<script>
                        alert("Error");
                    </script>';
            }
         }
    }
}