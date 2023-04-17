<?php
    require_once 'MyDLSUconnection.php';
    if(isset($_POST["submit"])){
        $productname = $_POST["productname"];
        $price = $_POST["price"];
        $discount = $_POST["discount"]; 
        $upload_dir = "MyDLSUupload/";
        $product_image = $upload_dir.$_FILES["imageUpload"]["name"];
        $upload_file = $upload_dir.basename($_FILES["imageUpload"]["name"]);
        $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION));
        $check = $_FILES["imageUpload"]["size"];
        $upload_ok = 0;

        if(file_exists($upload_file)){
            echo "<script>alert('The Item Already Exists')</script>";
            $upload_ok = 0;
        }else{
            $upload_ok = 1;
            if($check !== false){
                $upload_ok = 1;
                if($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif'){
                    $upload_ok = 1;
                    echo "<script>alert('Successfully Uploaded! ANIMO LA SALLE!')</script>";
                }else{
                    echo "<script>alert('ERROR. Please Change The Image Format')</script>";
                }
            }else{
                    echo "<script>alert('Please Change The Item')</script>";
                    $upload_ok = 0;
            }
        }

        if($upload_ok == 0){
            echo "<script>alert('File Upload Error. Please Try Again.')</script>";
        }else{
            if($productname !="" && $price !=""){
                move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$upload_file);

                $sql = "INSERT INTO product(product_name,price,discount,product_image)
                VALUES('$productname','$price','$discount','$product_image')";
            }
        }        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="MyDLSUupload.css">
    <style>
    * {
        box-sizing: border-box;
    }

    .menu {
        float: left;
        width: 20%;
        text-align: center;
    }

    .menu a {
        background-color: #e5e5e5;
        padding: 8px;
        margin-top: 7px;
        display: block;
        width: 100%;
        color: black;
    }

    .main {
        float: left;
        width: 60%;
        padding: 0 20px;
    }

    .right {
        background-color: #e5e5e5;
        float: left;
        width: 20%;
        padding: 15px;
        margin-top: 7px;
        text-align: center;
    }

    .button {
        background-color: #A4DE02; 
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        float: right;
    }

    .button1:hover {
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
        text-decoration: none; 
    }


@media only screen and (max-width: 620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
}

</style>
</head>
<body>
    <?php
        include_once 'MyHeader.php';
    ?>
    <br>
    <section id="upload_container">
        <form action="MyDLSUupload.php" method="POST" enctype="multipart/form-data">
            &emsp;
            <input type="text" name="productname" id="productname" placeholder="Product Name" required>
            <input type="number" name="price" id="price" placeholder="Product Price" required> 
            <input type="number" name="discount" id="discount" placeholder="Product Discount" required> 
            <input type="file" name="imageUpload" id="imageUpload" required>
            <br>
            <input type="submit" value="Upload" name="submit">
            <a href="MyHeader.php" class="button">Finish Transaction</a>
        </form>
    </section>

    <script>
        var productname = document.getElementById("productname");
        var price = document.getElementById("price");
        var discount = document.getElementById("discount");
        var file = document.getElementById("file");
        var uploadimage = document.getElementById("imageUpload");

    </script>
</body>
</html>
</head>




    