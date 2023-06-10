<?php 
@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}

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
                        <a class="active" id="client-area" href="register_form.php">CONNEXION</a>
                    </li>
                </ul>
            </div>
            

    </section>



    <div class="container-admin">
        <div class="content">
            <h3>Hi, <span>User</span></h3>
            <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
            <p>This is an user page</p>
            <a href="login_form.php" class="btn">login</a>
            <a href="register_form.php" class="btn">register</a>
            <a href="logout.php" class="btn">logout</a>
        </div>
    </div>
</body>

</html>