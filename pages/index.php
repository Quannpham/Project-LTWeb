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

    <title>
    </title>
</head>

<body>

    <?php
    require_once(__DIR__ . "/../admin/config.php");
    $query = "SELECT * FROM qls";
    session_start();
    $products = array();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $rs = $stmt->get_result();
    while ($row = $rs->fetch_assoc()) {
        $products[] = $row;
    }
    ?>
    
    <section id="header">
        <a href="#"><img src="../img/logo.png" class="logo" alt="anh logo" /></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
            </ul>
        </div>
    </section>

    <section id="hero">
        <h4>Trade in offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off</p>
        <button>Shop now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="../img/features/f1.png" alt="" />
            <h6>Free shipping</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f2.png" alt="" />
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f3.png" alt="" />
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f4.png" alt="" />
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f5.png" alt="" />
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="../img/features/f6.png" alt="" />
            <h6>F24/7 Support</h6>
        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> - All T-shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>


    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="../img/home/home-a1.jpg" width="170px" height="240px" alt="" />
                <div class="des">
                    <span>NXB Nguyễn Kim</span>
                    <h5>Nhìn thấy vạn vật</h5>
                    <div class="star" style="text-decoration: none">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="coming-up">Dự kiến: <strong>21/03/2024</strong></h4>
                </div>
            </div>
            <div class="pro">
                <img src="../img/home/home-a2.jpg" width="170px" height="240px" alt="" />
                <div class="des">
                    <span>NXB Nguyễn Kim</span>
                    <h5>Trang giấy đầu</h5>
                    <div class="star" style="text-decoration: none">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="coming-up">Dự kiến: <strong>27/07/2024</strong></h4>
                </div>
            </div>
            <div class="pro">
                <img src="../img/home/home-a3.jpg" width="170px" height="240px" alt="" />
                <div class="des">
                    <span>NXB Nguyễn Kim</span>
                    <h5>Khu vực hứng thú</h5>
                    <div class="star" style="text-decoration: none">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="coming-up">Dự kiến: <strong>11/01/2024</strong></h4>
                </div>
            </div>
            <div class="pro">
                <img src="../img/home/home-a4.jpg" width="170px" height="240px" alt="" />
                <div class="des">
                    <span>NXB Nguyễn Kim</span>
                    <h5>Lỗi lầm trong cuộc sống</h5>
                    <div class="star" style="text-decoration: none">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="coming-up">Dự kiến: <strong>12/12/2024</strong></h4>
                </div>
            </div>
            <div class="pro">
                <img src="../img/home/home-a5.jpg" width="170px" height="240px" alt="" />
                <div class="des">
                    <span>NXB Nguyễn Kim</span>
                    <h5>Cách viết thông tin quan trọng</h5>
                    <div class="star" style="text-decoration: none">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="coming-up">Dự kiến: <strong>27/05/2024</strong></h4>
                </div>
            </div>
            <div class="pro">
                <img src="../img/home/home-a6.jpg" width="170px" height="240px" alt="" />
                <div class="des">
                    <span>NXB Nguyễn Kim</span>
                    <h5>Sáng tạo khi viết</h5>
                    <div class="star" style="text-decoration: none">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="coming-up">Dự kiến: <strong>27/09/2024</strong></h4>
                </div>
            </div>
            <div class="pro">
                <img src="../img/home/home-a7.jpg" width="170px" height="240px" alt="" />
                <div class="des">
                    <span>NXB Nguyễn Kim</span>
                    <h5>Cách viết phi hư cấu</h5>
                    <div class="star" style="text-decoration: none">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="coming-up">Dự kiến: <strong>12/03/2024</strong></h4>
                </div>
            </div>
            <div class="pro">
                <img src="../img/home/home-a8.jpg" width="170px" height="240px" alt="" />
                <div class="des">
                    <span>NXB Nguyễn Kim</span>
                    <h5>Công cụ để viết</h5>
                    <div class="star" style="text-decoration: none">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4 class="coming-up">Dự kiến: <strong>31/09/2024</strong></h4>
                </div>
            </div>
        </div>
    </section>

    <a href="shop.php" style="text-decoration:none">
        <section id="sm-banner" class="section-p1">
            <div class="banner-box">
                <h4>crazy deals</h4>
                <h2>buy 1 get 1 free</h2>
                <span>The best classic dress is on sale at cara</span>
                <button class="white">Learn more</button>
            </div>
            <div class="banner-box banner-box2">
                <h4">Spring/Summer</h4>
                    <h2>upcomming season</h2>
                    <span>The best classic dress is on sale at cara</span>
                    <button class="white">Colletion</button>
            </div>
        </section>
    </a>


    <a href="shop.php" style="text-decoration: none">
        <section id="banner3">
            <div class="banner-box">
                <h2>Sale</h2>
                <h3>Collection -50% OFF</h3>
            </div>
            <div class="banner-box banner-box2">
                <h2>Super SALE</h2>
                <h3>Back to School -70% OFF</h3>
            </div>
            <div class="banner-box banner-box3">
                <h2>New Arrival</h2>
                <h3>Up to sale -30% OFF</h3>
            </div>
        </section>
    </a>


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