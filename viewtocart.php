<style>
  body {
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    margin: 0;
    padding: 0;
  }

  .cart-box  table {
    margin: 45px auto;
    background: #fff;
    padding: 30px;
    box-shadow: 0 6px 16px rgba(0,0,0,0.1);
    width: 100%;
    border-collapse: collapse;
    overflow: hidden;
  }

  th {
    background: #136935;
    color: #fff;
    padding: 14px;
    text-align: center;
    font-size: 25px;
    letter-spacing: 0.5px;
  }

  td {
    padding: 14px;
    text-align: center;
    font-size: 16px;
    color: #333;
    border-bottom: 1px solid #ddd; */
     vertical-align: middle;
  }

  tr:nth-child(even) {
    background: #f9f9f9;
  }

  tr:hover {
    background: #eaf4ff;
    transition: 0.3s;
  }

  td img {
    border-radius: 8px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  }

  .btn {
    display: inline-block;
    text-decoration: none;
    padding: 10px 16px;
    margin: 0 4px;
    border-radius: 6px;
    font-size: 15px;
    color: #fff;
    transition: all 0.3s ease;
  }

  .checkout-btn {
    background: #38a169;
  }
  .checkout-btn:hover {
    background: #2f855a;
  }

  .delete-btn {
    background: #e63946;
  }
  .delete-btn:hover {
    background: #c53030;
  }
</style>

<body>
<?php
  error_reporting(0);
  session_start();
  include 'db.php';
  include 'header.php';

  if (!isset($_SESSION['fullname']) && !isset($_SESSION['id']))
  {
      echo "<script>
          alert('Please login to view your cart');
          window.location.href='login.php';
      </script>";
      exit;
  }

  $userid = $_SESSION['id'];
  $qry = "SELECT * FROM add_card WHERE user_id = '$userid'";
  $res = mysqli_query($con, $qry);
?>

<div class="cart-box">
  <h2>Your Cart Items</h2>
  <table>
      <tr>
          <th>Image</th>
          <th>Name</th>
          <th>Price</th>
          <th>Action</th>
      </tr>

  <?php while ($row = mysqli_fetch_assoc($res)) { ?>
    <tr>
        <td><img src="admin/p_image/<?php echo $row['image']; ?>" width='80' height='80'></td>
        <td><?php echo $row['name']; ?></td>
        <td>₹<?php echo $row['price']; ?></td>
        
        <td>
          <a href="orderform.php?id=<?php echo $row['id']; ?>" class="btn checkout-btn">Checkout</a>
          <a href="deletecart.php?id=<?php echo $row['id']; ?>" 
              onclick="return confirm('Are you sure you want to delete this item?');" class="btn delete-btn">
             Delete
          </a>
        </td>
    </tr>
  <?php } ?>
  </table>
</div>

<!-- [ Footer section ] -->
 <br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br><br><br>
<?php include 'footer.php'; ?>
</body>
</html>
