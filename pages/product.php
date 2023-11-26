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
                <div id="subtotal" class="subtotal" style="border-style:none">
                    <form action="" method="POST">
                        <table style="width:100%">
                            <tr>
                                <td>Tên sách</td>
                                <td><?php echo $i["name"] ?></td>
                            </tr>
                            <tr>
                                <td>Nhà xuất bản</td>
                                <td><?php echo $i["brand"] ?></td>
                            </tr>
                            <tr>
                                <td>Tên tác giả</td>
                                <td><?php echo $i["author"] ?></td>
                            </tr>
                            <tr>
                                <td>Giá gốc</td>
                                <td><input class="normal-price" value="<?php echo $i["price"] ?>" name="price"> VND</input></td>
                            </tr>
                            <tr>
                                <td>Khuyến mãi</td>
                                <td><input class="discount-price" type="text" name="discount" value="<?php echo $i["discount"] ?>" /> VND
                                </td>
                            </tr>
                            <tr>
                                <td>Số trang</td>
                                <td><?php echo $i["page"] ?></td>
                            </tr>
                            <tr>
                                <td>Đã bán</td>
                                <td><?php echo $i["soldout"] ?></td>
                            </tr>
                            <tr>
                                <td>Năm xuất bản</td>
                                <td><?php echo $i["date"] ?></td>
                            </tr>
                            <tr>
                                <td>Trọng lượng</td>
                                <td><?php echo $i["gam"] ?></td>
                            </tr>
                            <tr>
                                <td>Tình trạng</td>
                                <td><?php echo $i["status"] ?></td>
                            </tr>
                            <tr>
                                <td>Số lượng</td>
                                <td><input class="quantity" type="number" value="<?php echo $number ?>" name="number">
                                </td>
                            </tr>
                            <tr>
                                <td>Tổng tiền</td>
                                <td><input class="total-price" type="text" name="total" value="<?php echo $total ?>"> VND
                                </td>
                            </tr>
                        </table>
                </div>
                <div class="btn-plus-mim" style="margin-left:20px">
                    <button type="submit" name="increase" class="increase">Thêm</button>
                    <button type="submit" name="decrease" class="decrease">Xóa</button>
                </div>
                <a href="add-to-cart.php?id=<?php echo ($i["id"]) ?>" style="text-decoration:none">
                    <p name="addToCart" style="margin-left:20px">Thêm vào giỏ hàng</p>
                </a>

                </form>

                <h4 style="margin-left:20px">Tóm tắt</h4>
                <span style="margin-left:20px; overflow:scroll"><?php echo $i["description"] ?></span>
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
            <p>Phạm Minh Quân</p>
            <p>Nguyễn Mạnh Quân</p>
        </div>
    </footer>
</body>

</html>