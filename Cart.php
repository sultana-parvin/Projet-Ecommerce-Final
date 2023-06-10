
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
        <a href="index.html">
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
                    <a class="active" href="Cart.php">
                        <i class="fa-solid fa-cart-shopping cart" style="color: #18af7d;"></i>
                    </a></li>
                <li>
                    <a id="client-area" href="register_form.php">CONNEXION</a>
                </li>
            </ul>
        </div>
        
        

</section>




<!-- cart page  -->


<section id="cart" class="section-p1">
    <table width="100%">
       <thead>
        <tr>
            <td>Remove</td>
            <td>Image</td>
            <td>Product</td>
            <td>Price</td>
            <td>quantity</td>
            <td>Subtotal</td>
        </tr>
       </thead>
       <tbody>
            <tr>
                <td><a href="#"><i class="fa-solid fa-circle-minus"></i></a></td>
                <td><img src="Assets/Img/Indian katan 1.jpg" alt=""></td>
                <td>Pure Indian Katan sharee</td>
                <td>£120</td>
                <td><input type="number" value="1"></td>
                <td>£120</td>
            </tr>
            <tr>
                <td><a href="#"><i class="fa-solid fa-circle-minus"></i></a></td>
                <td><img src="Assets/Img/Indian katan 2.jpg" alt=""></td>
                <td>Pure Indian Katan sharee</td>
                <td>£100</td>
                <td><input type="number" value="1"></td>
                <td>£100</td>
            </tr>
            <tr>
                <td><a href="#"><i class="fa-solid fa-circle-minus"></i></a></td>
                <td><img src="Assets/Img/Indian katan 3.jpg" alt=""></td>
                <td>Pure Indian Katan sharee</td>
                <td>£110</td>
                <td><input type="number" value="1"></td>
                <td>£110</td>
            </tr>
       </tbody>
    </table>
</section>

<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
            <input type="text" placeholder="Enter Your Coupon">
            <button>Apply</button>
        </div>
    </div>
    <div id="subtotal">
        <h3>Cart totals</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>£330</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Totals</strong></td>
                <td><strong>£330</strong></td>
            </tr>
        </table>
        <button>Proceed to Checkout</button>
    </div>
</section>








<footer class="footer-section">
    <a class="social" href="">FOLLOW OUR INSTAGRAM <strong>@ZIMAM_TRENDS</strong></a>
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
        </ul>
    </div>
    <p class="footer-p">Copyright ZIMAM_All right reserved</p>
</footer>
</body>
</html>

