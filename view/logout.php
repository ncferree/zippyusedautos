<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
<?php unset($_SESSION['userid']);
      session_destroy();
      setcookie($lifetime);  
?>
<?php include('register.php'); ?>
   <p>Thank you for logging out, <?php $firstname; ?> !</p>
</body>
</html>