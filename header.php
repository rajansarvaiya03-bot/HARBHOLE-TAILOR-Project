<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Harbhole Tailor</title>
  <link rel="stylesheet" href="style.css">
 
</head>
<body>
  <header>
    <div style="display:flex; align-items:center;">
      <img src="image/logo.jpg" alt="Logo">
      <h1>HARBHOLE TAILOR</h1>
    </div>

    <!-- Toggle Button for Mobile -->
    <div class="menu-toggle" onclick="toggleMenu()">☰</div>

    <nav>
      <ul id="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="menu.php">Menu</a></li>
        <li><a href="gallary.php">Gallery</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="profile.php">Profile</a></li>

      </ul>
    </nav>
  </header>

  <script>
    function toggleMenu() {
      document.getElementById("nav-links").classList.toggle("show");
    }
  </script>
</body>
</html>
