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

    if (isset($_POST["submit"])) {
        $filename = $_FILES["uploadFile"]["name"];
        $tempname = $_FILES["uploadFile"]["tmp_name"];
        $folder = "../img/" . $filename;

        $name = $_POST["name"];
        $price = $_POST["price"];
        $description = $_POST["description"];
        $brand = $_POST["brand"];
        $discount = $_POST["discount"];

        $sql = "INSERT INTO qls (name,price,description,images,brand,discount) VALUES ('$name','$price','$description','$filename','$brand','$discount')";
        mysqli_query($conn, $sql);
        if (move_uploaded_file($tempname, $folder)) {
            echo "<script>alert('Product uploaded successfully!');</script>";
        } else {
            echo "<script>alert('Product uploaded falied!');</script>";
        }
    }

    if (isset($_POST["edit"]) && isset($_POST["update"])) {
        echo '<form action="" method="POST">';
        echo 'Nhập ID ảnh cần sửa: <input type="text" name="edit_id">';
        echo '<input type="submit" name="edit" value="Sửa">';
        echo '</form>';
    }


    if (isset($_POST["edit"])) {
        $editId = $_POST["edit_id"];

        $sql = "SELECT * FROM qls WHERE id = '$editId'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $name = $row["name"];
            $price = $row["price"];
            $description = $row["description"];
            $brand = $row["brand"];
            $discount = $row["discount"];
            $filename = $row["images"];

            echo '<form action="" method="POST">';
            echo 'ID ảnh: <input type="text" name="update_id" value="' . $editId . '" readonly><br>';
            echo 'Tên ảnh: <input type="text" name="name" value="' . $name . '"><br>';
            echo 'Giá: <input type="text" name="price" value="' . $price . '"><br>';
            echo 'Mô tả: <textarea name="description">' . $description . '</textarea><br>';
            echo 'Thương hiệu: <input type="text" name="brand" value="' . $brand . '"><br>';
            echo 'Khuyến mại:<input type="text" name="discount" value=' . $discount . '"><br>';
            echo '<input type="submit" name="update" value="Cập nhật">';
            echo '</form>';
        } else {
            echo "Không tìm thấy ảnh với ID đã nhập.";
        }
    }

    // Cập nhật thông tin ảnh trong cơ sở dữ liệu khi biểu mẫu sửa được gửi đi
    if (isset($_POST["update"])) {
        $updateId = $_POST["update_id"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $description = $_POST["description"];
        $brand = $_POST["brand"];
        $discount = $_POST["discount"];

        // Cập nhật thông tin ảnh trong cơ sở dữ liệu
        $sql = "UPDATE qls SET name='$name', price='$price', description='$description', brand='$brand', discount='$discount' WHERE id='$updateId'";
        mysqli_query($conn, $sql);

        echo "<script>alert('Thông tin ảnh đã được cập nhật thành công!');</script>";
    }

    if (isset($_POST["delete"])) {
        $id = $_POST["delete"];

        $sql = "DELETE FROM qls WHERE id='$id'";
        mysqli_query($conn, $sql);

        echo "<script>alert('Product deleted successfully!');</script>";
    }
    ?>
    <div class="container">
        <div class="manager my-3">
            <h3>Thêm một sản phẩm</h3>
            <form action="" method="POST" enctype="multipart/form-data" class="mr-10 ml-10">
                <div class="row">
                    <div class="col-6 mb-3 gap-3 ml-10">
                        <div>
                            <label class="form-label">
                                Nhập tên
                            </label>
                            <input class="form-control pd-l-3 pd-r-3" name="name" value="<?php echo $name ?>" />
                        </div>
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
                            Thương hiệu
                        </label>
                        <input class="form-control" type="text" name="brand" value="<?php echo $brand ?>" />
                    </div>
                    <div class="col-6 mb-3">
                        <label class="form-label">
                            Khuyến mại
                        </label>
                        <input class="form-control" type="text" name="discount" value="<?php echo $discount ?>" />
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
                <button class="btn btn-success mt-3 ml-10" type="submit" name="edit">
                    Sửa sản phẩm
                </button>
                <button class="btn btn-danger mt-3 ml-10" type="submit" name="delete">
                    Xóa sản phẩm
                </button>
                <br />
            </form>
        </div>
    </div>
</body>

</html>