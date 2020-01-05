<?php
include "connect.php";
if(isset($_POST['submit']))
{
    $product_name=$_POST['product_name'];
    $categories=$_POST['categories'];
    $amount=$_POST['amount'];
    $price=$_POST['price'];
    $file_name = $_FILES['image']['name'];

    $file_location = $_FILES['image']['tmp_name'];

    move_uploaded_file($file_location,"img/".$file_name);

    echo $file_name;
    $sql = "insert into products (product_name,categories,price,amount,img) VALUES ('$product_name','$categories','$price','$amount','$file_name')";

    $con->query($sql);
}
?>
<html>
<head>
   <title>Add new product</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/color.css">
</head>
<body>
    <div class="container-fluid" id="main"></div>
    <center>
    <div class="row">


            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h3>Add new product</h3></div>
                    <div class="panel-body" style="height: 70%">
                        <div class="row">
                            <form enctype="multipart/form-data" action="" method="post">
                            <div class="col-sm-6">
                                <i class="fa fa-plus-square"></i>
                                <input type="file" name="image">

                            </div>
                            <div class="col-sm-6">

                                    <div class="form-group">

                                        <input type="text" class="form-control" id="usr" placeholder="Enter Product Name...." name="product_name">
                                    </div>
                                    <?php

                                    $query_cat = "SELECT * FROM categories WHERE 1";

                                    $resutl = $con->query($query_cat);
                                    # code...


                                    ?>
                                    <div class="form-group">
                                        <label for="sel1">Categories</label>
                                        <select class="form-control" id="sel1" name="categories">

                                            <?php

                                            while ($row = $resutl->fetch_assoc()) {
                                                # code...


                                                ?>

                                                <option value="<?php echo $row['categories']; ?>"><?php echo $row['categories']; ?></option>

                                            <?php } ?>

                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="usr" placeholder="Amount" name="amount">
                                    </div>

                                    <div class="form-group">
                                        <input type="number" class="form-control" id="usr" placeholder="Price" name="price">
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
                                </form>

                            </div>
                        </div>


                    </div>
                    <div class="panel-footer">
                        <ul class="top-nav">
                            <li><a href="#"><i class="fa fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li>&#x9f3 000.0tk</li>


                        </ul>
                    </div>
                </div>
            </div>

    </div>
    </center>
</body>
</html>
