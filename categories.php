<?php
/**
 * Created by PhpStorm.
 * User: ABHI
 * Date: 3/24/2017
 * Time: 3:08 PM
 */?>
<?php
include 'connect.php';

?>
<?php
if(isset($_GET['name'])){
    $cat_pro= $_GET['name'];

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/color.css">
    <!-- custom css -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<?php

$sql = "SELECT * FROM products WHERE categories='$cat_pro'";
$result = $con->query($sql);

?>

<div class="container-fluid">
    <div class="row">

        <?php
        while($row = $result->fetch_assoc())
        {

            ?>



            <div class="col-sm-3">
                <div class="panel panel-primary" >
                    <div class="panel-heading">
                        <?php    echo $row['product_name']; ?>
                    </div>
                    <div class="panel-body" style="height: 40%;">
                        <!--								<img src="img/--><?php //echo $row['img']; ?><!--" class="img-responsive">-->
                        <img src="img/<?php echo $row['img']; ?>" class="img-responsive" style="height: 100%;width: 100%" data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">
                        <!-- Modal -->
                        <div class="modal fade" id="myModal<?php echo $row['id'] ?>" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"><?php echo $row['product_name']; ?></h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Be the first to review this product</p>
                                        <img src="img/<?php echo $row['img']; ?>" class="img-responsive" style="height: 40%;width: 80%" ">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--    Modal End-->


                    </div>
                    <div class="panel-footer">
                        <ul class="top-nav">
                            <li><a href="add_to_cart.php?id=<?php echo $row['id']?>" <i class="fa fa-shopping-basket"></i></a></li>
                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                            <li>    &#x9f3 <?php echo $row['price']; ?> tk</li>
                        </ul>
                    </div>
                </div>
            </div>





            <?php
        }
        ?>
    </div>
</div>


</div>




</body>
</html>