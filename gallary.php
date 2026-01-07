<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gallery - HARBHOLE TAILOR</title>
  <style type="text/css">
    /* Reset and Base Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      /* background: linear-gradient(135deg, #f8f8f8, #e9ecef); */
      color: #333;
      overflow-x: hidden;
    }

    .hero {
      background: url('./image/contact.jpg') no-repeat center center/cover;
      height: 90vh;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
      padding: 0 20px;
    }

    .hero h2 {
      font-size: 50px;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 20px;
      margin-bottom: 30px;
    }

    .hero a {
      padding: 12px 30px;
      background: #ff9900;
      color: white;
      text-decoration: none;
      border-radius: 5px;
      transition: 0.3s;
    }

    .hero a:hover {
      background: #e68900;
    }

    /* Container Utility */
    .container {
      width: 100%;
      max-width: 1200px;
      margin: auto;
    }

    /* Section Title */
    .gallery-section {
      padding: 60px 0;
      text-align: center;
      position: relative;
    }

    .gallery-section h2 {
      font-size: 40px;
      margin-bottom: 10px;
      color: #111;
      text-transform: uppercase;
      letter-spacing: 2px;
      animation: fadeDown 1s ease;
    }

    .gallery-section p {
      margin-bottom: 30px;
      color: #666;
      font-size: 18px;
      animation: fadeUp 1.2s ease;
    }

    /* Grid */
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
      animation: fadeIn 1.5s ease;
    }

    .gallery-item {
      position: relative;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      transform: scale(1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .gallery-item:hover {
      transform: scale(1.05);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
    }

    .gallery-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
      transform: scale(1.1) rotate(1deg);
    }

    /* Overlay effect */
    .gallery-item::after {
      content: "View Design";
      position: absolute;
      bottom: -40px;
      left: 0;
      right: 0;
      background: rgba(0, 0, 0, 0.6);
      color: #fff;
      text-align: center;
      padding: 12px 0;
      font-size: 16px;
      letter-spacing: 1px;
      opacity: 0;
      transition: all 0.4s ease;
    }

    .gallery-item:hover::after {
      bottom: 0;
      opacity: 1;
    }
  </style>
</head>

<body>

  <?php include "header.php" ?>

  <section class="hero">
    <h2>Custom Tailoring, Perfect Fit</h2>
    <p>Explore premium fabrics and bespoke outfits designed for you.</p>
    <a href="menu.php">Shop Now</a>
  </section>

  <section class="gallery-section">
    <div class="container">
      <h2>Our Work Gallery</h2>
      <p>Explore our tailoring collection crafted with precision & elegance</p>
      <div class="gallery-grid">
        <div class="gallery-item"><img src="image/shirt.jpg" alt="Shirt"></div>
        <div class="gallery-item"><img src="image/pent.jpg" alt="Pant"></div>
        <div class="gallery-item"><img src="image/coat.jpg" alt="Coat"></div>
        <div class="gallery-item"><img src="image/kurto.jpg" alt="Kurta"></div>
        <div class="gallery-item"><img src="image/pathani.jpg" alt="Pathani"></div>
        <div class="gallery-item"><img src="image/jaket.jpg" alt="Jacket"></div>
        <div class="gallery-item"><img src="image/safari.jpg" alt="Safari Suit"></div>
        <div class="gallery-item"><img src="image/suit.jpg" alt="Suit"></div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>
</body>

</html>