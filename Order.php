<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "tailor_shop");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = $_POST['item'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("INSERT INTO orders (item, price, name, phone, address) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sdsss", $item, $price, $name, $phone, $address);

    if ($stmt->execute()) {
        echo "<p style='color:green; text-align:center;'>Order placed successfully!</p>";
    } else {
        echo "<p style='color:red; text-align:center;'>Error placing order.</p>";
    }
    $stmt->close();
}

$item = $_GET['item'] ?? '';
$price = $_GET['price'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Place Order</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f8f8f8;
            margin: 0;
            padding: 20px;
        }
        .order-form {
            max-width: 400px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .order-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .order-form input, .order-form textarea {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .order-form button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .order-form button:hover {
            background: #218838;
        }
    </style>
</head>
<body>

<div class="order-form">
    <h2>Place Your Order</h2>
    <form method="post">
        <input type="text" name="item" value="<?php echo htmlspecialchars($item); ?>" readonly>
        <input type="text" name="price" value="<?php echo htmlspecialchars($price); ?>" readonly>
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Delivery Address" required></textarea>
        <button type="submit">Confirm Order</button>
    </form>
</div>

</body>
</html>
