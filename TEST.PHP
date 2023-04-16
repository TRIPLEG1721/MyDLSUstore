<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
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
    <header>
        <div class="w3-container w3-green">
        <h1>MyDLSUstore<button class="button button1"><a href="MyDLSUupload.php">Product</button><button class="button button1"><a href="MyHeader.php">Go Home</button></h1>
        <br></br>
        </div>
    </header>
    <section id="MyUploadStyle">
        <form action="MyDLSUupload.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="MyProductName" id="MyProductName" placeholder="Product Name" required>
            <input type="number" name="MyPrice" id="MyPrice" placeholder="Product Price" required> 
            <input type="number" name="MyDiscount" id="MyDiscount" placeholder="Product Discount" required> 
            <input type="file" name="imageupload" id="imageupload" required>
            <button class="button button1" id="choose">CHOOSE PRODUCT IMAGE</button> 
            <input type="submit" name="submit" value="Upload">  

        </form>
    </section>
</body>
</html>
</head>




    