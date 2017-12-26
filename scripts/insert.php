<?php
    global $connection;

    $f_name = $l_name = $email = $password = "";

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
?>