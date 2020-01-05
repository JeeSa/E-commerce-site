<?php
//session_start();
//if(isset($_SESSION["name"])){
//
//    echo "done";
//}
//else{
//
////    header('location: admin_login.php');
//}
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
</head>

    <div class="container-fluid">
        <div class="row" style="margin-top: 30px">
            <div class="col-sm-5 col-sm-offset-3">
                <div class="panel panel-info">

                    <div class="panel-body">
                        <ul style="list-style-type:none" >
                            <li ><a href="index.php" class="btn btn-primary btn-block ">HOME</a></li>
                            <br>
                            <li ><a href="addproduct.php" class="btn btn-primary btn-block ">ADD PRODUCT</a></li>
                            <br>
                            <li ><a href="login.php" class="btn btn-danger btn-block ">Log Out</a></li>


                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>


<!-- javascript here -->
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>

<!-- custom js  -->
</body>
</html>