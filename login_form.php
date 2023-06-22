<?php 
@include 'config.php';
session_start();

if(isset($_POST['submit'])){
    
   
   
   
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
   
    
    


    $select = "SELECT * FROM users WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);


    if (mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin') {

        $_SESSION['admin_name'] = $row['name'];
        header('location:admin_page.php');

      }
      elseif($row['user_type'] == 'user') {

        $_SESSION['user_name'] = $row['name'];
        header('location:user_page.php');

    }
}else{
    $error[] = 'incorrect email or password!';
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
                    <li><a class="active" href="index.php">HOME</a>
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
                        <a id="client-area" href="">CONNEXION</a>
                    </li>
                </ul>
            </div>
            

    </section>


    
        <div class="form-container">
            
            <form action="login_form.php" method="post">
            <h3>Se connecter</h3>
            <?php 

                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">' .$error. '</span>';
                    };
                };


                ?>
                
                <input type="email" name="email" required placeholder="enter your email">
                
               
                <input type="password" name="password" required placeholder="Password">  
                
                
                <input type="submit" name="submit" value="Se connecter" class="form-btn">
                <p>Besoin d'un compte? <a href="register_form.php">S'inscrire</a></p>
                
            </form>
        
        </div>





    
    

        
    


</body>
</html>