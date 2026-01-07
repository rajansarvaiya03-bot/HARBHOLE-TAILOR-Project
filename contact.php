<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us - HARBHOLE TAILOR</title>
  <style type="text/css">
    /* Reset & Base Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      color: #333;
    }

    .container {
      width: 90%;
      max-width: 1100px;
      margin: auto;
    }

    /* Header */


    /* Contact Section */
    .contact-section {
      padding: 60px 0;
      background-color: #fff;
      text-align: center;
    }

    .contact-section h2 {
      font-size: 32px;
      margin-bottom: 10px;
    }

    .contact-section p {
      margin-bottom: 40px;
      color: #666;
    }

    .contact-wrapper {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      justify-content: space-between;
      align-items: flex-start;
    }

    /* Contact Form */
    .contact-form {
      flex: 1 1 48%;
      display: flex;
      flex-direction: column;
    }

    .contact-form input,
    .contact-form textarea {
      padding: 12px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    .contact-form button {
      padding: 14px;
      background-color: #222;
      color: #fff;
      border: none;
      font-size: 16px;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .contact-form button:hover {
      background-color: #444;
    }

    /* Contact Info */
    .contact-info {
      flex: 1 1 45%;
      text-align: left;
      background-color: #f8f8f8;
      padding: 20px;
      border-radius: 6px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
    }

    .contact-info h3 {
      margin-bottom: 20px;
      color: #111;
      font-size: 30px;
    }

    .contact-info p {
      padding: 10px;
      margin-bottom: 12px;
    }
    .contact-info img{
      margin-bottom: 10px;
    }

    /* Footer */
    footer {
      background-color: #222;
      color: #fff;
      text-align: center;
      padding: 20px 0;
      margin-top: 40px;
    }

    /* Responsive */
    @media (max-width: 768px) {

      .logo,
      nav {
        float: none;
        text-align: center;
      }

      .nav-links li {
        display: block;
        margin: 10px 0;
      }

      .contact-wrapper {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>

  <?php include "header.php" ?>



  <div class="contact-info">
    <align>
      <center>
        <h3>Contact Information</h3>
        <img src="./image/contact.jpg" alt="">
        <p><strong>📍 Address :</strong> Main Bazar Opp Shiv Temple Babapur - 365610</p>
        <p><strong>📞 Phone :</strong> 7863074852,8200403334</p>
        <p><strong>📧 Email :</strong> rajansarvaiya03@gmail.com</p>
        <p><strong>📝 Blog ID :</strong> https://harbholetailor.blogspot.com/</p>
      </center>
    </align>
  </div>
  </div>
  </section>

  <?php include 'footer.php'; ?>

</body>

</html>