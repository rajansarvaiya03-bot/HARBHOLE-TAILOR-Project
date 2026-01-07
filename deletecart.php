<?php
include 'db.php';

    $id = $_GET['id'];

    $delete = "DELETE FROM add_card WHERE id = $id";
    $res = mysqli_query($con, $delete);

    if ($res)
    {
        header("Location: viewtocart.php?msg=deleted");
        exit;
    }
    else
    {
        echo "Error deleting item: " . mysqli_error($con);
    }
?>
