<?php
    global $connection;

    $f_name = $l_name = $email = $password = "";

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM signup WHGERE email = '{$email}' ";
        $sql_query = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($sql_query);

        if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password)){

            if($count > 0){
                $error1 = "<div class='alert alert-danger alert-dismissable'>
                              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                              User with that email already exist.
                           </div>";
            }else{

            }
        }else{
            ///
        }
    }
?>