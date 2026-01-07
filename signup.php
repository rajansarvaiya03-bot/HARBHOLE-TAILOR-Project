<?php
 include 'header.php'; 
  error_reporting(0);
  session_start();
 ?>

<style>
  * {
  box-sizing: border-box;
  font-family: Arial, sans-serif;
  }

  body {
  background-color: #f2f2f2;
  align-items: center;
  }

  .form-container {
  margin-top: 60px;
  margin-left:35%;
  padding: 30px;
  border-radius: 8px;
  }

  .form-container h2 {
  margin-bottom: 20px;
  color: #333;
  font-size:40px;
  margin-left:15%;
  }

  form label {
  display: block;
  margin-top: 15px;
  color: #555;
  }

  form input,
  form select {
  width: 50%;
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #ccc;
  border-radius: 10px;
  }

  form button {
  margin-top: 20px;
  width: 50%;
  padding: 12px;
  background-color: #046b32ff;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  }

  form button:hover {
  background-color: #20a80bff;
  }

</style>

<body>
  <div class="form-container">
    <h2>Register Form</h2>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

      <label for="name">Full Name</label>
      <input type="text" name="name" required>

      <label for="email">Email</label>
      <input type="email"  name="email" required>

      <label for="password">Password</label>
      <input type="password"  name="password" required>

      <button type="submit" name="sb">Register Now...</button>
    </form>
  </div>
</body>

<!-- [ Database Connectivity ] -->
<?php
  if (isset($_POST["sb"])) 
  {
    $name = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];  


    // Connect to DB
    $c = mysqli_connect("localhost", "root", "", "harbhole");

    if (!$c) {
      die("Connection failed: " . mysqli_connect_error());
    }

    // Insert query
    $qry = "INSERT INTO users_login (name,email,password) 
            VALUES ('$name','$email','$password')";
    
    if (mysqli_query($c, $qry)) {
      echo "<script>
              alert('User registration successful');
              window.location.href='profile.php';
            </script>";
    } else {
      echo "<script>
              alert('Error: " . mysqli_error($c) . "');
            </script>";
    }
  }
?>
