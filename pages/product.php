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
        session_start();
        include("./admin/config.php");
        $product;
        $quantity = 0;

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
           
            $query = "SELECT * FROM qls where id ='$id'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                $product = mysqli_fetch_row($result);
            } else {
                echo "Không có kết quả.";
            }
          }
    ?>
    <section id="header">
        <a href="#"><img src="../img/logo.png" class="logo" alt="anh logo"/></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a class="active" href="shop.php">Shop</li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>     
        </div>
    </section>
    
    <section class="section-p1" id="prodetails">
        <div class="single-pro-image">
            <img src="../img/products/f1.jpg" width="100%" id="MainImg" alt="">
            <div class="small-img-group">
                <div class="small-img-col" onclick="firstItem()">
                    <img src="../img/products/f1.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col" onclick="secondItem()">
                    <img src="../img/products/f2.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col" onclick="thirdItem()">
                    <img src="../img/products/f3.jpg" width="100%" class="small-img" alt="">
                </div>
                <div class="small-img-col" onclick="fourthItem()">
                    <img src="../img/products/f4.jpg" width="100%" class="small-img" alt="">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6>Home/ T-Shirt</h6>
            <h4>Men's Fashion T Shirt</h4>
            <h2>$999</h2>
            <select>
                <option>Select size</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
                <option>XXL</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add to Cart</button>
            <h4>Product Detail</h4>
            <span>Lorem ipsum dolor sit 
                amet consectetur adipisicing elit. 
                Quasi quod mollitia fugiat, nihil con
                sectetur a doloremque, laudantium vel r
                em, natus tempore. Pariatur reprehender
                it saepe voluptatum id eligendi recusan
                dae magni atque.</span>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Feature Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="../img/products/n1.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$999</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../img/products/n2.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$999</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../img/products/n3.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$999</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="../img/products/n4.jpg" alt="" />
                <div class="des">
                    <span>adidas</span>
                    <h5>Cartoon Astronaut T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$999</h4>
                </div>
                <a href="#"><i class="fas fa-shopping-cart cart"></i></a>
            </div>
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
            <p>@PhamMinhQuan @NguyenManhQuan @NguyenThanhTong @MaiMinhTan</p>
        </div>
    </footer>

    <script>
        const MainImg = document.getElementById("MainImg");
        const smallImg = document.getElementsByClassName("small-img");
        
        const firstItem = () => {  
            smallImg[0].src;
            MainImg.src = smallImg[0].src
        }
        const secondItem = () => {
            smallImg[1].src;
            MainImg.src = smallImg[1].src
        }
        const thirdItem = () => {
            smallImg[2].src;
            MainImg.src = smallImg[2].src
        }
        const fourthItem = () => {
            smallImg[3].src;
            MainImg.src = smallImg[3].src
        }
    </script>
</body>
</html>