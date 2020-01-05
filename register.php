<?php
/**
 * Created by PhpStorm.
 * User: ABHI
 * Date: 3/24/2017
 * Time: 2:24 AM
 */
?>
<?php
    include "connect.php";
    if(isset($_POST['submit'])){
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $re_pass = $_POST['re_pass'];
        $phone = $_POST['phone'];
        if(!empty($first_name)&&!empty($last_name)&&!empty($email)&&!empty($password)&&!empty($re_pass)&&!empty($phone)){
            if($password==$re_pass){
                $sql="insert into user_reg (first_name,last_name,email,password,phone) VALUES('$first_name','$last_name','$email','$password','$phone') ";
                $result=$con->query($sql);
                if($result){
                    echo "done";
               }else{
                    echo "not1";
                }
            }else{
                echo "not2";
            }
        }else{
            echo "not3";
        }
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
</head>
<body>
<div class="container-fluid">
    <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h2>Registration Page</h2>
            </div>
            <div class="panel-body">
                <form action="register.php" method="post">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="first_name"placeholder="first name">
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="last_name" placeholder="last name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="password" class="form-control" name="password"placeholder="password">
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="password" class="form-control" name="re_pass" placeholder="confirm password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <input type="tel" class="form-control" name="phone" placeholder="Phone....">
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>



                </form>

            </div>
        </div>
    </div>

</div>

</body>
</html>
