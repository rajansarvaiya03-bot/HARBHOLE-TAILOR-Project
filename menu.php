<style>
  body {
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    margin: 0;
    padding: 0;
  }

  h1 {
    font-size: 40px;
    color: #136935;
    text-align: center;
    margin: 30px 0 40px;
  }

  /* Container for product cards */
  .product-container {
    display: flex;
    gap: 40px;
    padding: 40px;
  }

  /* Product Card */
  .a1 {
    display: flex;
    flex-direction: column;
    align-items: center;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 0 5px #303331ff;
    height: 400px;
    width: 300px;
  }

  .a1:hover {
    transform: scale(1.03);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
  }

  /* Product Image */
  .a1 img {
    width: 220px;
    height: 220px;
    border-radius: 12px;
    object-fit: cover;
    margin-bottom: 15px;
  }

  /* Product Info */
  .a2 {
    text-align: center;
  }

  .a2 h2 {
    font-size: 22px;
    margin-bottom: 8px;
    color: #222;
  }

  .a2 p {
    font-size: 16px;
    color: #666;
    margin-bottom: 10px;
  }

  .a2 h2:last-of-type {
    font-size: 20px;
    color: #136935;
    margin: 10px 0 15px;
  }

  /* Button */
  .a2 button {
    padding: 10px 20px;
    background-color: #136935;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
  }

  .a2 button:hover {
    background-color: #d62828;
  }
</style>

<?php 
    include 'header.php';
    include 'db.php';
    $result = mysqli_query($con,"select * from menu");
?>
<br><br><br><br><br>
<h1>Our Products</h1>
<div class="product-container">
<?php while($row = mysqli_fetch_assoc($result)) { ?>
    <div class="a1">
        <img src="admin/p_image/<?= $row['image']; ?>" alt="Product image">
        <div class="a2">
            <h2><?= $row['name']; ?></h2>
            <h2>₹<?= $row['price']; ?></h2>

            <form action="addtocart.php" method="post"> 
                <input type="hidden" name="name" value="<?= $row['name'] ?>">
                <input type="hidden" name="image" value="<?= $row['image'] ?>">
                <input type="hidden" name="price" value="<?= $row['price'] ?>">
                <button type="submit" class="btn">Add To Cart</button>
            </form>
        </div>
    </div>
<?php } ?>
</div>

<!-- Footer Section -->
<br><br>
<?php include 'footer.php'; ?>
