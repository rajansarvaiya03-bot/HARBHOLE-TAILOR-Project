<?php
include 'header.php';
include 'db.php';

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM odear_now WHERE id = '$id' ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if($row)
    {
?>
        
<script>
    function updateTotal()
    {
        let price = parseFloat(document.getElementById("price").value);
        let qty = parseInt(document.getElementById("qty").value);

        if (isNaN(qty) || qty < 1) qty = 1;

        document.getElementById("total").value = price * qty;
    }
</script>
       
<body><br><br><br><br><br>
    <div class="ou">
        <form action="" method="post">
            <h2>Update Order</h2>
            <img src="admin/p_image/<?= $row['image'] ?>" width="200px" height="200px"><br><br>

            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="hidden" name="name" value="<?= $row['name'] ?>">
            <input type="hidden" name="rupees" value="<?= $row['rupees'] ?>">

            <p><label>Name:</label> <?= $row['name'] ?></p>
            <p><label>Price:</label> ₹<?= $row['rupees'] ?></p>

            <?php 
                $qty = !empty($row['qty']) ? $row['qty'] : 1; 
                $price = $row['rupees'];
                $total = $price * $qty; 
            ?>
            <p>
            <label><b>Quantity:</b></label>
            <input type="number" id="qty" class="one" name="qty" value="<?php echo $row['quentity']; ?>" min="1" oninput="updateTotal()">
            </p>

            <p>
            <label><b>Total:</b></label>
            <input type="text" id="total" name="total" class="one" value="<?php echo $row['total']; ?>" readonly>
            </p>

            <input type="hidden" id="price" name="price" value="<?php echo $row['rupees']; ?>">

            <p>
                <label><b>Payment Method:</b></label>
                <select name="payment_method" class="one" required>
                    <option value="" >Select Payment Method</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                </select>
            </p>

            <p>
                <label><b>Address:</b></label><br>
                <input type="text" class="one" name="address" value="<?php echo $row['address'] ?>" placeholder="Enter Address" required style="width:80%;">
            </p>

            <p>
                <label><b>Mobile No:</b></label><br>
                <input type="number" class="one" name="mobile" value="<?php echo $row['mobile'] ?>" placeholder="Enter mobile no" required style="width:80%;">
            </p>

            <input type="submit" value="Update Now" name="submit">
   
        </form>
    </div> 
</body>

<?php
    }
    else 
    {
        echo "Product not found.";
    }
    }
?>

<style>
    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: #fff;
        margin: 0;
        padding: 0;
    }

    form {
        text-align: center;
        width: 45%;
        background: #fff;
        margin: 50px auto;
        padding: 30px;
        border-radius: 15px;
    }

    .ou h2 {
        text-align: center;
        color:#136935;
        margin-bottom: 20px;
        font-size: 40px;
    }

    img {
        border-radius: 10%;
        box-shadow: 0px 0px 10px #136935;
    }

    .ou p {
        font-size: 18px;
        color: #444;
        margin: 15px 0;
        text-align: left;
    }

    label {
        font-weight: bold;
        color: #222;
    }

    .one {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        width: 50%;
        margin-top: 5px;
        font-size: 16px;

    }

    .one:focus {
        outline: none;
        border-color: #136935;
        box-shadow: 0px 0px 5px #136935;
    }

    input[type=submit] {
        padding: 12px 25px;
        font-size: 18px;
        margin-top: 20px;
        border: none;
        cursor: pointer;
        color: white;
        background: #136935;
        border-radius: 10px;
    }

    input[type=submit]:hover {
        background-color: #0a3b1e;
    }
</style>

<?php

if (isset($_POST['submit']))
{
    $product_name   = $_POST['name'];
    $qty            = $_POST['qty'];
    $rupees          = $_POST['rupees'];
    $total          = $_POST['total'];
    $payment_method = $_POST['payment_method'];
    $address        = $_POST['address'];
    $mobile         = $_POST['mobile'];

    $qry = "UPDATE odear_now SET name='$product_name', quentity='$qty', rupees='$rupees', total='$total', pay_method='$payment_method',
    address='$address', mobile='$mobile' WHERE id='$id' ";

    $res = mysqli_query($con, $qry);

    if ($res)
    {
        echo "<script>alert('Update Order successfully!');
        window.location.href='vieworder.php';
        </script>";
        exit;
    }
    else
    {
        echo "Error: ";
    }
}
include 'footer.php';
?>