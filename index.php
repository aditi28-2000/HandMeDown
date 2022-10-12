<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <form class="" action="user_login.php" method="post">
      <h2>LOGIN</h2
        <?php if (isset($_GET['error'])) {?>
          <p class="error">
          <?php echo $_GET['error']; ?>
          </p>

      <?php } ?>
      <label for="">Username</label>
      <input type="text" name="username" placeholder="enter your username" value=""><br>
      <label for="">Password</label>
      <input type="password" name="password" placeholder="enter your password" value=""><br>
      <button type="submit" name="button">Login</button>
      <a href="register.php" class="re">Register here</a>
    </form>
  </body>
</html>
