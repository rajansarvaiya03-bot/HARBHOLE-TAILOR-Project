<?php 
  include 'header.php'; 
  include 'db.php';
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
  width: 100%;
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
    <h2>Login Form</h2>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

      <label for="name">Username</label>
      <input type="text" name="name" required>

      <label for="password">Paasword</label>
      <input type="password"  name="password" required>

     
      <button type="submit" name="sb">Login Now...</button>
    </form>
  </div>
</body>

<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $result = mysqli_query($con,"SELECT * FROM users_login WHERE name='$name' AND password='$password'");

    if (mysqli_num_rows($result) > 0) 
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['id'] = $row['id']; 
        $_SESSION['name'] = $row['name'];

        echo "<script>
            alert('Login successful');
            window.location.href='profile.php';
        </script>";
        exit;
    }
    else
    {
        echo "<script>
            alert('Invalid username or password');
            window.location.href='login.php';
        </script>";
        exit;
    }
  }
?>