<?php
session_start();
include("../admin/config.php");
$id = $_GET["id"];
$test = $conn->query("SELECT * FROM qls WHERE id = $id");
$product_detail = $test->fetch_assoc();
if (!isset($_SESSION["cart"][$id])) {
    $_SESSION["cart"][$id]["name"] = $product_detail["name"];
    $_SESSION["cart"][$id]["price"] = $product_detail["price"];
    $_SESSION["cart"][$id]["quantity"] = 1;
    $_SESSION["cart"][$id]["total"] =  $product_detail["total"];
    $_SESSION["cart"][$id]["image"] = $product_detail["images"];
    $_SESSION["cart"][$id]["id"] = $product_detail["id"];
    $_SESSION["cart"][$id]["discount"] = $product_detail["discount"];
} else {
    $_SESSION["cart"][$id]["quantity"] += 1;
}
header("Location: {$_SERVER['HTTP_REFERER']}");
