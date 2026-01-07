<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tailor Website Footer</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: #f9f9f9;
    }

    footer {
      background: #222;
      color: #fff;
      padding: 50px 20px;
    }

    .footer-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      max-width: 1200px;
      margin: auto;
    }

    .footer-column h3 {
      font-size: 20px;
      margin-bottom: 15px;
      color: #f8c10e;
      /* Golden tailoring theme */
    }

    .footer-column p,
    .footer-column a {
      font-size: 15px;
      color: #ddd;
      line-height: 1.8;
      text-decoration: none;
    }

    .footer-column a:hover {
      color: #f8c10e;
    }

    .social-links a {
      display: inline-block;
      margin-right: 10px;
      background: #444;
      color: #fff;
      padding: 8px 12px;
      border-radius: 5px;
      transition: 0.3s;
    }

    .social-links a:hover {
      background: #f8c10e;
      color: #000;
    }

    .footer-bottom {
      text-align: center;
      padding: 15px;
      margin-top: 30px;
      border-top: 1px solid #444;
      font-size: 14px;
      color: #aaa;
    }
  </style>
</head>

<body>

  <!-- Footer -->
  <footer>
    <div class="footer-container">

      <!-- About -->
      <div class="footer-column">
        <h3>About Us</h3>
        <p>At Harbhole Tailors, we create custom-made suits, dresses, and ethnic wear with perfect fitting and premium
          fabrics.</p>
      </div>

      <!-- Contact -->
      <div class="footer-column">
        <h3>Contact Us</h3>
        <p>📍  Main Bazar Opp Shiv Temple Babapur - 365610</p>
        <p>📞7863074852,8200403334</p>
        <p>✉️ rajansarvaiya03@gmail.com</p>
      </div>

      <!-- Social -->
      <div class="footer-column">
        <h3>Follow Us</h3>
        <div class="social-links">
          <a href="#">Facebook</a>
          <a href="#">Instagram</a>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      &copy; 2025 HARBHOLE TAILOR | All Rights Reserved
    </div>
  </footer>

</body>

</html>