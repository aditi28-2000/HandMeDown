<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <form class="" action="register_validate.php" method="post">
      <h2>Register</h2>
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
      <?php if (isset($_GET['success'])) { ?>
                     <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
              <label for="">Name</label>
              <?php if (isset($_GET['name'])) { ?>
               <input type="text"
                      name="name"
                      placeholder="enter your name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }
          else{ ?>
               <input type="text"
                      name="name"
                      placeholder="enter your name"><br>
          <?php }?>

          <label for="">CaseID</label>
          <?php if (isset($_GET['caseid'])) { ?>
           <input type="text"
                  name="caseid"
                  placeholder="enter your CaseID"
                  value="<?php echo $_GET['caseid']; ?>"><br>
          <?php }
          else{ ?>
           <input type="text"
                  name="caseid"
                  placeholder="enter your CaseID"><br>
          <?php }?>
          <label>Username</label>
          <?php if (isset($_GET['username'])) { ?>
               <input type="text"
                      name="username"
                      placeholder="enter your username"
                      value="<?php echo $_GET['username']; ?>"><br>
          <?php }else{ ?>
               <input type="text"
                      name="username"
                      placeholder="enter your username"><br>
          <?php }?>
          <label>Password</label>
               	<input type="password"
                           name="password"
                           placeholder="enter your password"><br>

                    <label>Retype Password</label>
                    <input type="password"
                           name="repassword"
                           placeholder="enter your password again"><br>

                <button type="submit">Register</button>
          <a href="index.php" class="re">Registered User?</a>
    </form>

  </body>
</html>
