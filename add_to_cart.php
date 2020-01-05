<?php
include "connect.php";
if(isset($_GET['id'])) {
    $product_id = $_GET['id'];
    $sql = "insert into add_to_cart(product_id) values ('$product_id')";

    $con->query($sql);

    header("location:index.php");
}
else{
    $cart=$con->query("select * from add_to_cart");
    $product=$con->query("select * from product");
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
    <div class="container-fluid" id="main">
        <div  id="header"></div>
        <div class="container" id="body">
           <table class="table table-bordered ">
               <thead>
            <tr>
                <th>Delete</th>
                <th>Picture</th>
                <th>Product Name</th>
                <th> Unit Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
               </thead>
               <?php
               while($cart_row=$cart->fetch_assoc())
               {
                   while($product_row=$product->fetch_assoc()){
                       if($cart_row['product_id']==$product_row['id'])
                       {
                            ?> <?php
                       }
                   }
               }
               ?>
               <tbody>
               <tr>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td></td>
                   <td><input type="number"name="quantity" placeholder="1"></td>
                   <td></td>
               </tr>
               </tbody>
               <tfoot>
               <tr>
                   <td colspan="2"><input type="button" value="Continue Shopping" class="btn btn-block btn-primary" </td>
                   <td colspan="2"><input type="button" value="Update Shopping Cart" class="btn btn-block btn-success" </td>

                   <td colspan="2">Total:</td>

               </tr>
               </tfoot>
           </table>
        </div>
        <div id="footer"></div>
    </div>

</body>
</html>
