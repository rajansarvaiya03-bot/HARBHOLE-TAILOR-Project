<?php
include 'db.php';
session_start();

if (isset($_POST['submit']))
{
    $product_name   = $_POST['name'];
    $product_image  = $_POST['image'];
    $qty            = $_POST['qty'];
    $price          = $_POST['price'];
    $total          = $_POST['total'];
    $payment_method = $_POST['payment_method'];
    $address        = $_POST['address'];
    $mobile         = $_POST['mobile'];

    $qry = "INSERT INTO odear_now (name, image, quentity, rupees, total, pay_method, address, mobile, user_id) 
            VALUES ('$product_name', '$product_image', '$qty', '$price', '$total', '$payment_method', '$address', '$mobile','{$_SESSION['id']}')";

    $res = mysqli_query($con, $qry);

    if ($res)
    {
        echo "<script>alert('Order placed successfully!');</script>";
        header("Location:vieworder.php");
        exit;
    }
    else
    {
        echo "Error: ";
    }
}
else
{
    echo "Invalid request.";
}
?>
