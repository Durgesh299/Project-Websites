<!DOCTYPE html>
<html>
    <head>
        <title> LOGIN </title>
        <link rel="stylesheet" type="text/css"  href=" style/style login3.css">
</head>
<body>
    <form action="login.php" method="post">
        <h2> LOGIN </h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
        <label for="User Name">User Name</label>
        <input type="text" name="uname" id="User Name">
        <br>
          <label for="Password">Password</label>
        <input type="password" name="password" id="Password">
        <br>
     <button type="submit"><a href="Home3.html">LOGIN</a></button>
     <div class="links">
         Don't Have Account? <a href="register.php"> Sign Up Now
         </a>
        </div>
    </form>
</body>
</html>