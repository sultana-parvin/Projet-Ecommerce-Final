<?php

@include 'config.php';
if(isset($_POST['submit'])){
session_start();   

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = md5($_POST['password']);
$cpass = md5($_POST['cpassword']);
$user_type = $_POST['user_type'];

 $select = "SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

$result = mysqli_query($conn, $select);


if (mysqli_num_rows($result) > 0){
$error[] = 'user already exist!';

}else{
if($pass != $cpass){
$error[] = 'password not matched!';
 }else{
     $insert = "INSERT INTO users(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
       mysqli_query($conn, $insert);
       header('location:login_form.php');
     }
 }



};

?> 








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZIMAM TRENDS</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8335ebf6a9.js" crossorigin="anonymous"></script>
   
</head>
<body>
    <section id="header">
            <a href="index.php">
                <img class="logo-img" src="/Assets/Img/ZIMAM.png">
            </a>
            <div>
                <ul id="navbar">
                    <li><a href="index.php">HOME</a>
                    </li>
                    <li>
                    <a href="Collection.php">COLLECTION</a>
                    </li>
                    <li>
                    <a href="Homme.php">HOMME</a>
                    </li>
                    <li>  
                    <a href="Femme.php">FEMME</a>
                    </li>
                    <li>
                    <a href="Enfant.php">ENFANT</a>
                    </li>
                    <li>
                    <a href="About.php">ABOUT</a>
                    </li>
                    <li>
                        <a href="Cart.php">
                            <i class="fa-solid fa-cart-shopping cart" style="color: #0c0d0e;"></i>
                        </a></li>
                    <li>
                        <a class="active" id="client-area" href="login_form.php">CONNEXION</a>
                    </li>
                </ul>
            </div>
            

    </section>




    
        <div class="form-container">
            
            <form action="register_form.php" method="post">
            <h3>S'inscrire</h3>
               <?php 

                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };


                ?>
                <input type="text" name="name" required placeholder="enter your name">
                

                
                <input type="email" name="email" required placeholder="enter your email">
                
               
                <input type="password" name="password" required placeholder="Password">  
               

                
                <input type="password" name="cpassword" required placeholder="confirm votre password">

                <select name="user_type">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
                
                
                <input type="submit" name="submit" value="S'inscrire" class="form-btn">
                <p>Vous avez déjà un compte? <a href="login_form.php">Se connecter</a></p>
                
            </form>
        
    

        
        </div>

</body>
</html>

