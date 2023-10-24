<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      include('./config.php');
            $name="";
            $price="";
            $description="";
            $filename="";
            $brand="";
            
            if(isset($_POST["submit"])){
               
                $filename = $_FILES["uploadFile"]["name"];
                $tempname = $_FILES["uploadFile"]["tmp_name"];
                $folder = "../img/" . $filename;

                $name=$_POST["name"];
                $price=$_POST["price"];
                $description=$_POST["description"];
                $brand=$_POST["brand"];
                
                $sql = "INSERT INTO qls (name,price,description,images,brand) VALUES ('$name','$price','$description','$filename','$brand')";
                mysqli_query($conn, $sql);
                if (move_uploaded_file($tempname, $folder)) {
                    echo "<script>alert('Image uploaded successfully!');</script>";
                } else {
                    echo "<script>alert('Image uploaded falied!');</script>";
                }
            }
    ?>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="input-wrap">
                <label>Nhập tên</label>
                <input type="text" name="name" value="<?php echo $name?>">
            </div>
            <div class="input-wrap">
                <label>Nhập giá</label>
                <input type="text" name="price" value="<?php echo $price ?>">
            </div>
            <div class="input-wrap">
                <label>Nhập mô tả sản phẩm</label>
                <input type="text" name="description" value="<?php echo $description ?>">
            </div>
            <div class="input-wrap">
                <label>Nhập tên thương hiệu</label>
                <input type="text" name="brand" value="<?php echo $brand?>">
            </div>
            <div class="input-wrap">
                <label>Nhập ảnh</label>
                <input type="file"  name="uploadFile" value="">
            </div>
            <div class="input-wrap"><input type="submit" name="submit" value="Thêm sản phẩm"></div>
        </form>
    </div>
</body>
</html>