<?php
    session_start();
    include 'header.php'; 
    error_reporting(0);
?>
<style>
    body {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #ece9e6, #ffffff);
      margin: 0;
      padding: 0;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .profile-card {
      text-align: center;
      margin-top:130px;
    }

    .profile-card img {
      width: 180px;
      height: 180px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
    }

    .profile-card h2 {
      margin: 10px 0 5px;
      font-size: 26px;
      color: #333;
    }

    .profile-card p {
      margin: 4px 0;
      color: #555;
      font-size: 18px;
    }

    .btn-container {
      margin-top: 20px;
    }

    .btn {
      display: inline-block;
      padding: 12px 28px;
      margin: 8px;
      border: none;
      border-radius: 8px;
      font-size: 15px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
      text-decoration: none;
    }

    .btn-login {
      background: #3f9f42;
      color: #fff;
    }

    .btn-login:hover {
      background: #0e5711;
    }

    .btn-register {
      background: #2196F3;
      color: #fff;
    }

    .btn-register:hover {
      background: #115eac;
    }

    .btn-logout {
      background: #971c1cff;
      color: #fff;
    }

    .btn-logout:hover {
      background: #81291dff;
    }

    .btn-view {
      background: #1d2c6eff;
      color: #fff;
    }

    .btn-view:hover {
      background: #1c31bbff;
    }

  </style>

<body>
    <div class="profile-card">
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Profile Icon">

    <?php if (isset($_SESSION['name']) && isset($_SESSION['id'])): ?>
        <h2>Name :- <?php echo $_SESSION['name']; ?></h2>
        <div class="btn-container">
            <a href="logout.php" class="btn btn-logout">Logout</a>
            <a href="vieworder.php" class="btn btn-view">View Order</a>
        </div>
    <?php else: ?>
        <div class="btn-container">
            <a href="login.php" class="btn btn-login">Login</a>
            <a href="signup.php" class="btn btn-register">Register</a>
        </div>
    <?php endif; ?>
</div>

<br><br><br><br><br>
<!---------- [Footer Section] ---------->
<?php include 'footer.php'; ?>
</body>
