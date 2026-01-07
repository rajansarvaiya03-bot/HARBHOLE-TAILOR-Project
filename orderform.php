<style type="text/css">
    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: #ffffff;
        margin: 0;
        padding: 0;
    }

    form {
        text-align: center;
        width: 45%;
        background: #ffffff;
        margin: 50px auto;
        padding: 30px;
        border-radius: 15px;
    }

    .h1 h2 {
        text-align: center;
        color:#136935;
        margin-bottom: 20px;
        font-size: 40px;
    }

    img {
        border-radius: 10%;
        box-shadow: 0px 0px 10px#136935;;
    }

    .h1 p {
        font-size: 20px;
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
        font-size: 20px;
        transition: 0.2s;
    }

    .one:hover {
        outline: none;
        border-color: #136935;
        box-shadow: 0px 0px 5px #136935;
    }

    input[type=submit] {
        padding: 12px 25px;
        font-size: 20px;
        margin-top: 20px;
        border: none;
        cursor: pointer;
        color: white;
        background: #136935;
        border-radius: 10px;
    }

    input[type=submit]:hover 
    {
        background-color: #0a3b1eff;    
    }

</style>


<?php
include 'header.php';
include 'db.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $qry = "SELECT * FROM add_card WHERE id = $id";
    $result = mysqli_query($con, $qry);

    if ($row = mysqli_fetch_assoc($result)) {
?>
<!-- [ Using Java Script ] -->
<script>
    function updateTotal()
    {
        let price = parseFloat(document.getElementById("price").value);
        let qty = parseInt(document.getElementById("qty").value);

        if (isNaN(qty) || qty < 1) qty = 1;

        document.getElementById("total").value = price * qty;
    }
</script>

<body>
    <br><br><br><br><br>
    <form action="placeorder.php" method="post">
        <div class="h1">
            <h2>Confirm Your Order</h2>
            <img src="admin/p_image/<?= $row['image'] ?>" width="200px" height="200px"><br><br>

            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <input type="hidden" name="image" value="<?= $row['image'] ?>">
            <input type="hidden" name="name" value="<?= $row['name'] ?>">
            <input type="hidden" name="price" value="<?= $row['price'] ?>">

            <p><label>Name:</label> <?= $row['name'] ?></p>
            <p><label>Price:</label> ₹<?= $row['price'] ?></p>

            <?php 
                $qty = !empty($row['qty']) ? $row['qty'] : 1; 
                $price = $row['price'];
                $total = $price * $qty; 
            ?>
            <p>
            <label><b>Quantity:</b></label>
            <input type="number" id="qty" class="one" name="qty" value="<?php echo $qty; ?>" min="1" oninput="updateTotal()">
            </p>

            <p>
            <label><b>Total:</b></label>
            <input type="text" id="total" name="total" class="one" value="<?php echo $total; ?>" readonly>
            </p>

            <input type="hidden" id="price" name="price" value="<?php echo $price; ?>">

            <p>
                <label><b>Payment Method:</b></label>
                <select name="payment_method" class="one" required>
                    <option value="" >Select Payment Method</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                </select>
            </p>

            <p>
                <label><b>Address:</b></label><br>
                <input type="text" class="one" name="address" placeholder="Enter Address" required style="width:80%;">
            </p>

            <p>
                <label><b>Mobile No:</b></label><br>
                <input type="number" class="one" name="mobile" placeholder="Enter mobile no" required style="width:80%;">
            </p>

            <input type="submit" value="Buy Now" name="submit">
        </div>
    </form>
</body>
<?php
    } else {
        echo "Product not found.";
    }
    } else {
        echo "Invalid request (ID missing).";
    }
?>
<!-- [ Footer Section ] -->
<?php
include 'footer.php';
?>
