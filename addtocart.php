<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add To Cart</title>
  <style>
    .a{
    background-color: khaki;
    }
  </style>

</head>
<body><br><br><br><br><br>
<?php
session_start();
include 'db.php';

if (!isset($_SESSION['fullname']) && !isset($_SESSION['id']))
{
    echo "<script>
        alert('Please login Now...');
        window.location.href='login.php';
    </script>";
    exit;
}

if (isset($_POST['name']) && isset($_POST['price']) && isset($_POST['image']))
{
    $name  = $_POST['name'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $insert = "INSERT INTO add_card (name, image, price, user_id) VALUES ('$name', '$image', '$price','{$_SESSION['id']}')";
    $res = mysqli_query($con, $insert);

    if ($res)
    {
        header("Location:viewtocart.php");
        exit;
    }
    else
    {
        echo "Not added: ";
    }
}
else
{
    echo "Invalid request!";
}
?>

</body>
</html>