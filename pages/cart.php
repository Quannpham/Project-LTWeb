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
    <section id="header">
        <a href="#"><img src="../img/logo.png" class="logo" alt="anh logo"/></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a class="active" href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>     
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#Let's Talk</h2>
        <p>Lorem ipsum dolor sit ameti ex.</p>
    </section>

    <section id="cart" class="section-p1">
        <table style="width: 100%;">
            <thead>
                <tr>
                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="#"><i class="fa-sharp fa-regular fa-circle"></i></a></td>
                    <td><img src="../img/products/f1.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirt</td>
                    <td>$99</td>
                    <td><input type="number" value="1"></td>
                    <td>$99</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa-sharp fa-regular fa-circle"></i></a></td>
                    <td><img src="../img/products/f2.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirt</td>
                    <td>$99</td>
                    <td><input type="number" value="1"></td>
                    <td>$99</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa-sharp fa-regular fa-circle"></i></a></td>
                    <td><img src="../img/products/f3.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirt</td>
                    <td>$99</td>
                    <td><input type="number" value="1"></td>
                    <td>$99</td>
                </tr>
                <tr>
                    <td><a href="#"><i class="fa-sharp fa-regular fa-circle"></i></a></td>
                    <td><img src="../img/products/f4.jpg" alt=""></td>
                    <td>Cartoon Astronaut T-Shirt</td>
                    <td>$99</td>
                    <td><input type="number" value="1"></td>
                    <td>$99</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
        <div id="coupon">
            <h3>Apply coupon</h3>
            <div>
                <input type="text" name="" id="" placeholder="Enter your coupon">
                <button class="normal">Apply</button>
            </div>
        </div>
        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>$999</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td>$999</td>
                </tr>
            </table>
            <button class="normal">Proceed to checkout</button>
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

    <script src="script.js"></script>
</body>
</html>