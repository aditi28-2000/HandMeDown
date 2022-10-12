<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['username']))
{
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Home Page</title>
     <link rel="stylesheet" href="/css/styles.css">
   </head>
   <body>
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
    <a href="logout.php">Logout</a>
   </body>
 </html>
 <?php
}
else {
  header("Location: index,php");
  exit();
}
?>
