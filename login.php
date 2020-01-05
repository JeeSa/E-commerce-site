<?php
include "connect.php";
if(isset($_POST['submit']))
{

    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email)&&!empty($password))
    {

            $sql="select password from user_reg where email='$email'";
            $result=$con->query($sql);

        $pass = $result->fetch_array();

//            if($result)
//            {
//                echo "done";
//            }
//            else
//            {
//                echo "not1";
//            }
        if($password==$pass['password'])
        {
           // echo " successfully Login";
            header("location:index.php");
        }
        else
        {
            //echo "register Fast Then Login";
            header("location:register.php");
        }
    }

}
?>
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
                <h2>User Login</h2>
            </div>
            <div class="panel-body">
                <form action="login.php" method="post">

                    <div class="row">
                        <div class="form-group col-sm-12">
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-sm-12">
                            <input type="password" class="form-control" name="password"placeholder="password">
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

