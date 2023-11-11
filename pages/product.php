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
    $total = 0;
    $number = 0;
    $discount;

    if (isset($_POST["increase"])) {
        $number = $_POST["number"];
        $number += 1;
        $discount = $_POST["discount"];
        $total = $number * $discount;
    }
    ?>
    <?php
    session_start();
    require_once(__DIR__ . "/../admin/config.php");
    $product;
    $quantity = 0;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM qls where id ='$id'";
        $products = array();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $rs = $stmt->get_result();
        while ($row = $rs->fetch_assoc()) {
            $products[] = $row;
        }
    }
    ?>
    <section id="header">
        <a href="#"><img src="../img/logo.png" class="logo" alt="anh logo" /></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </div>
    </section>

    <section class="section-p1" id="prodetails">
        <?php
        foreach ($products as $i) {
        ?>
            <div class="single-pro-image">
                <img src="../img/<?php echo $i["images"] ?>" width="100%" id="MainImg" alt="">

            </div>

            <div class="single-pro-details">
                <h6><?php echo $i["brand"] ?></h6>
                <h4><?php echo $i["name"] ?></h4>

                <select>
                    <option>Select size</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                    <option>XXL</option>
                </select>
                <form action="" method="POST">
                    <input value="<?php echo $i["price"] ?>" name="price">$</input>
                    <input type="text" name="discount" value="<?php echo $i["discount"] ?>" />$
                    <input type="number" value="<?php echo $number ?>" name="number">
                    <input type="text" name="total" value="<?php echo $total ?>">
                    <button type="submit" name="increase">cong</button>
                    <button name="addToCart" class="normal">Add to Cart</button>
                </form>

                <h4>Product Detail</h4>
                <span><?php echo $i["description"] ?></span>
            </div>
        <?php } ?>
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
            <p>@PhamMinhQuan @NguyenManhQuan @NguyenThanhTong @MaiMinhTan</p>
        </div>
    </footer>
</body>

</html>