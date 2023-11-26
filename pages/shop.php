<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/regular.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/solid.min.css" />

    <title>Project LapTrinhMang</title>
</head>
<body>
    <?php
         require_once(__DIR__."/../admin/config.php");
         $query = "SELECT * FROM qls";
         $products = array();
         $stmt = $conn->prepare($query);
         $stmt->execute();
         $rs = $stmt->get_result();
         while($row = $rs->fetch_assoc()){
            $products[] = $row;
         }
    ?>
    <section id="header">
        <a href="#"><img src="../img/logo.png" class="logo" alt="anh logo"/></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>     
        </div>
    </section>

    <section id="page-header">
        <h2>#Stay home</h2>
        <p>Save more with coupons & up to 70% off</p>
    </section>

    <section id="product1" class="section-p1">
        <div class="pro-container">
        <?php 
            foreach ($products as $i){          
         ?>
            <a href="product.php?id=<?php echo ($i["id"])?>">
            <div class="pro" onclick="window.location.href='product.php'">

                <img src="../img/<?php echo $i["images"]?>" alt="" />
                <div class="des">
                    <span><?php echo $i["brand"]?></span>
                    <h5><?php echo $i["name"]?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 style="text-decoration: line-through;"><?php echo $i["price"]?><strong> VND</strong></h4>
                    <h4><?php echo $i["discount"]?><strong> VND</strong></h4>
                </div>
                <a href="cart.php?id=<?php echo($i["id"])?>"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            </a>
            <?php } ?>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address" />
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="../img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Ha Noi</p>
            <p><strong>Phone:</strong> 0123456789</p>
            <p><strong>Hours:</strong> 7:00 - 22:30, Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <a href="http://facebook.com"><i class="fa-brands fa-facebook"></i></a>
                    <a href="http://youtube.com"><i class="fa-brands fa-youtube"></i></a>
                    <a href="http://instagram.com"><i class="fa-brands fa-instagram"></i></a>
                    <a href="http://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                    <a href="http://twitch.com"><i class="fa-brands fa-twitch"></i></a> 
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col install">
            <h4>Install App</h4>
            <p>Google Play || App Store</p>
            <div class="row">
                <img src="../img/pay/app.jpg" alt="">
                <img src="../img/pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="../img/pay/pay.png" alt="">
        </div>
        <div class="copyright">
            <p>Phạm Minh Quân</p>
            <p>Nguyễn Mạnh Quân</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>