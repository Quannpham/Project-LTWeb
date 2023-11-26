<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    include('./config.php');
    $name = "";
    $price = "";
    $description = "";
    $filename = "";
    $brand = "";
    $discount = "";
    $page = "";
    $author = "";
    $soldout = "";
    $date = "";
    $gam = "";
    $status = "";

    if (isset($_POST["submit"])) {
        $filename = $_FILES["uploadFile"]["name"];
        $tempname = $_FILES["uploadFile"]["tmp_name"];
        $folder = "../img/" . $filename;

        $name = $_POST["name"];
        $price = $_POST["price"];
        $description = $_POST["description"];
        $brand = $_POST["brand"];
        $discount = $_POST["discount"];
        $page = $_POST["page"];
        $author = $_POST["author"];
        $soldout = $_POST["soldout"];
        $date = $_POST["date"];
        $gam = $_POST["gam"];
        $status = $_POST["status"];

        $sql = "INSERT INTO qls (name,price,description,images,brand,discount,page,author,soldout,date,gam,status) VALUES ('$name','$price','$description','$filename','$brand','$discount','$page','$author','$soldout','$date','$gam','$status')";
        mysqli_query($conn, $sql);
        if (move_uploaded_file($tempname, $folder)) {
            echo "<script>alert('Product uploaded successfully!');</script>";
        } else {
            echo "<script>alert('Product uploaded falied!');</script>";
        }
    }
    ?>
    <div class="container">
        <div class="manager my-3">
            <h3>Thêm một sản phẩm</h3>
            <form action="" method="POST" enctype="multipart/form-data" class="mr-10 ml-10">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="form-label">
                            Nhập tên sách
                        </label>
                        <input class="form-control pd-l-3 pd-r-3" name="name" value="<?php echo $name ?>" />
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">
                            Tên tác giả
                        </label>
                        <input class="form-control" type="text" name="author" value="<?php echo $author ?>" />
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">
                            Nhập giá
                        </label>
                        <input class="form-control" name="price" value="<?php echo $price ?>" />
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">
                            Mô tả
                        </label>
                        <input class="form-control" type="text" name="description" value="<?php echo $description ?>" />
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">
                            Nhà xuất bản
                        </label>
                        <input class="form-control" type="text" name="brand" value="<?php echo $brand ?>" />
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">
                            Khuyến mãi
                        </label>
                        <input class="form-control" type="text" name="discount" value="<?php echo $discount ?>" />
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">
                            Số trang
                        </label>
                        <input class="form-control" type="text" name="page" value="<?php echo $page ?>" />
                    </div>

                    <div class="col-6 mb-3">
                        <label class="form-label">
                            Sách đã bán
                        </label>
                        <input class="form-control" type="text" name="soldout" value="<?php echo $soldout ?>" />
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">
                            Năm xuất bản
                        </label>
                        <input class="form-control" type="text" name="date" value="<?php echo $date ?>" />
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">
                            Trọng lượng
                        </label>
                        <input class="form-control" type="text" name="gam" value="<?php echo $gam ?>" />
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">
                            Tình trạng
                        </label>
                        <input class="form-control" type="text" name="status" value="<?php echo $status ?>" />
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">
                            Ảnh
                        </label>
                        <input class="form-control" name="uploadFile" type="file" value="" />
                    </div>
                </div>
                <button class="btn btn-primary mt-3" type="submit" name="submit">
                    Thêm sản phẩm
                </button>
            </form>
        </div>
    </div>
</body>

</html>