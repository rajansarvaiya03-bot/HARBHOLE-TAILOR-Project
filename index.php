<?php include "header.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Client Feedback</title>
  <style>
    /* Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f9f9f9;
      color: #333;
      line-height: 1.6;
    }

    /* Slider */
    .slider {
      width: 100%;
      height: 800px;
      margin: 20px auto;
      overflow: hidden;
      border-radius: 12px;
      position: relative;
    }
    .slides {
      width: 500%;
      height: 100%;
      display: flex;
      animation: slide 20s infinite;
    }
    .slides img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    @keyframes slide {
      0%, 20%   { margin-left: 0%; }
      25%, 45%  { margin-left: -100%; }
      50%, 70%  { margin-left: -200%; }
      75%, 95%  { margin-left: -300%; }
      100%      { margin-left: -400%; }
    }

    /* Testimonials */
    .testimonials {
      padding: 50px 20px;
      background: #fff;
      text-align: center;
    }
    .testimonials h2 {
      font-size: 28px;
      margin-bottom: 20px;
    }
    .testimonial-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }
    .testimonial {
      background: #f4f4f4;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 3px 6px rgba(0,0,0,0.1);
    }
    .testimonial p {
      font-size: 16px;
      margin-bottom: 10px;
      font-style: italic;
    }
    .testimonial h4 {
      font-size: 14px;
      color: #555;
    }

    /* Feedback Form */
    .feedback-section {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      padding: 60px 20px;
      background: #fdfdfd;
    }
    .feedback-img {
      flex: 1;
      min-width: 300px;
      text-align: center;
      padding: 20px;
    }
    .feedback-img img {
      max-width: 90%;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    .feedback-form {
      flex: 1;
      min-width: 320px;
      padding: 20px 40px;
    }
    .feedback-form h2 {
      margin-bottom: 20px;
      font-size: 28px;
      text-align: center;
      color: #333;
    }
    .feedback-form form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }
    .feedback-form input,
    .feedback-form textarea {
      padding: 12px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 8px;
      outline: none;
      transition: border 0.3s;
    }
    .feedback-form input:focus,
    .feedback-form textarea:focus {
      border: 1px solid #007BFF;
    }
    .feedback-form button {
      background: #007BFF;
      color: white;
      border: none;
      padding: 14px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }
    .feedback-form button:hover {
      background: #0056b3;
    }
    /* About Section */
.about-section {
  padding: 60px 20px;
  background: #fff;
}
.about-container {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  gap: 30px;
  max-width: 1200px;
  margin: auto;
}
.about-img {
  flex: 1;
  min-width: 300px;
  text-align: center;
}
.about-img img {
  max-width: 80%;
  border-radius: 12px;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
.about-text {
  flex: 1;
  min-width: 320px;
}
.about-text h2 {
  font-size: 32px;
  margin-bottom: 20px;
  color: #333;
}
.about-text p {
  font-size: 16px;
  margin-bottom: 15px;
  color: #555;
  line-height: 1.8;
}
.about-btn {
  display: inline-block;
  margin-top: 10px;
  padding: 12px 24px;
  background: #007BFF;
  color: #fff;
  border-radius: 8px;
  text-decoration: none;
  transition: 0.3s;
}
.about-btn:hover {
  background: #0056b3;
}

  </style>
</head>

<body>

  <!-- Hero Slider -->
  <div class="slider">
    <div class="slides">
      <img src="./image/contact.jpg" alt="">
      <img src="image/slider-2.jpg" alt="Shirt">
      <img src="image/slider3.jpg" alt="Safari">
      <img src="image/slider4.jpg" alt="Shirt">
      <img src="image/slider5.webp" alt="Pathani">
    </div>
  </div>
   <!-- About Section -->
  <section class="about-section">
    <div class="about-container">
      <div class="about-img">
        <img src="image/ab.jpg" alt="About Our Tailor Shop">
      </div>
      <div class="about-text">
        <h2>About Our Tailoring</h2>
        <p>
          At <strong>Harbhole Tailor</strong>, we believe that every stitch tells a story. 
          With years of craftsmanship and a passion for style, we create bespoke outfits 
          tailored perfectly for you. From traditional wear to modern fashion, our mission 
          is to bring your vision to life with precision and elegance.
        </p>
        <p>
          We pride ourselves on personalized service, premium fabrics, and timeless designs. 
          Whether it’s for a wedding, business event, or casual attire, we ensure that 
          your outfit reflects your personality and confidence.
        </p>
        <a href="contact.php" class="about-btn">Discover More</a>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials">
    <div class="container">
      <h2>What Our Clients Say</h2>
      <div class="testimonial-grid">
        <div class="testimonial">
          <p>"The quality and fit are unmatched. I felt like royalty!"</p>
          <h4>- James R.</h4>
        </div>
        <div class="testimonial">
          <p>"Your Vision, Our Craftsmanship."</p>
          <h4>- Carlos M.</h4>
        </div>
        <div class="testimonial">
          <p>"Prompt service and a truly custom experience."</p>
          <h4>- Liam T.</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- Feedback Form Section -->
  <section class="feedback-section">
    <div class="feedback-img">
      <img src="image/feedback.webp" alt="Client Feedback">
    </div>
    <div class="feedback-form">
      <h2>Share Your Feedback</h2>
      <form action="submit_feedback.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" rows="5" placeholder="Write your feedback..." required></textarea>
        <button type="submit">Submit Feedback</button>
      </form>
    </div>
  </section>

  <?php include 'footer.php'; ?>

</body>
</html>
