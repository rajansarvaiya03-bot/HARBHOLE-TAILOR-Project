<?php
  session_start();
  include 'db.php';
  include 'header.php';

  if (!isset($_SESSION['id'])) {
      die("User not logged in.");
  }
  $userid = $_SESSION['id'];

  $qry = "SELECT * FROM odear_now WHERE user_id = '$userid'";
  $res = mysqli_query($con, $qry) or die("Query Failed: " . mysqli_error($con));
?>


<style>
  body {
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    margin: 0;
    padding: 0;
  }

  .order-container table {
    margin: 37px auto;
    box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
  }

  .order-container h1 {
    text-align: center;
    color: #f00c1fff;
    margin-bottom: 20px;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    overflow: hidden;
  }

  th, td {
    padding: 20px 15px;
    text-align: center;
  }

  th {
    background: #136935;
    color: white;
    font-size: 20px;
  }

  tr:nth-child(even) {
    background: #fffcfcff;
  }

  tr:hover {
    background: #444c4145;
  }

  td img {
    border-radius: 8px;
  }

  .action-links a {
    text-decoration: none;
    /* font-weight: bold; */
    padding: 6px 12px;
    border-radius: 6px;
    margin: 5px;
  }

  .update-link {
    background: #2a9d8f;
    color: white;
  }

  .delete-link {
    background: #e63946;
    color: white;
  }

  .no-order {
    text-align: center;
    font-size: 30px;
    font-weight: bold;
    color: #e63946;
    padding: 20px;
  }
</style>
</head>
<body>
  <div class="order-container">
    <h1>Your Orders</h1>
    <table>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Payment Method</th>
        <th>Address</th>
        <th>Mobile No</th>
        <th>Action</th>
      </tr>

      <?php if (mysqli_num_rows($res) > 0) { 
          while ($row = mysqli_fetch_assoc($res)) { ?>
        <tr>
          <td><img src="admin/p_image/<?php echo $row['image']; ?>" width='70' height='70'></td>
          <td><?php echo $row['name']; ?></td>
          <td>₹<?php echo $row['rupees']; ?></td>
          <td><?php echo $row['quentity']; ?></td>
          <td>₹<?php echo $row['total']; ?></td>
          <td><?php echo $row['pay_method']; ?></td>
          <td><?php echo $row['address']; ?></td>
          <td><?php echo $row['mobile']; ?></td>
          <td class="action-links">
            <a class="update-link" href="updateorder.php?id=<?php echo $row['id']; ?>">Update</a>
          </td>
        </tr>
      <?php } } else { ?>
        <tr>
          <td colspan="9" class="no-order">No orders found</td>
        </tr>
      <?php } ?>
    </table>
  </div>
 <!-- [ Footer Section ]  -->
     <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <?php include 'footer.php'; ?>
</body>
