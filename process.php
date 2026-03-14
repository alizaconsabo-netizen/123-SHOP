<?php
include "conn.php";

//this code is for  regisration
if(isset($_POST['reg'])){
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
   
    //validate
    $check_email = mysqli_query($conn, "SELECT * FROM customers WHERE email = '$email'");
    $num_email = mysqli_num_rows($check_email);
    

    if($num_email <= 0){


    //insert data
    $insert = mysqli_query($conn, "INSERT INTO customers VALUES('0','$fn','$ln','$email','$pass')");
        
    if($insert == true){
        ?>
        <script>
            alert("successful registration");
            window.location.href="index.php";
        </script>
        <?php
    }else{
        echo "Erorr in Inserting";
    }

    }else{
        ?>
        <script>
            alert("Email exist");
            window.location.href="index.php";
        </script>
        <?php
    }
   

   
}//closing reg

if (isset($_POST['log'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = $_POST['pass'];

    //validate
    $check_email = mysqli_query($conn, "SELECT * FROM customers WHERE email = '$email'");

    if (mysqli_num_rows($get) > 0) {
        $user = mysqli_fetch_assoc($get);

        // Verify password
        if (password_verify($pass, $user['password'])) {
            echo "Login successful!";
           
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No account found with this email.";
    }
}

if (isset($_POST['log'])){
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $check_email = mysqli_query($conn, "SELECT * FROM customer
    WHERE Email= '$email' AND Password='$pass' ");
    $num_email = mysqli_num_rows($check_email);

    if($num_email >= 1){
        ?>
        <script>
            alert("login successfull");
            window.location.href="customer/index.php";

            
        </script>
        <?php



    }else{
        ?>
        <script>
            alert("wrong email or pasword");
            window.location.href="index.php";

            
        </script>
        <?php

    
    }

}

?>


