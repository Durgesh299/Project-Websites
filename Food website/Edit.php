<html>
    <head>
        <link rel="stylesheet" href="style/style change.css">
        <title> Change Profile</title>
</head>
<body>
<div class="nav">
        <div class="logo">
    <p><a href="index.php"> PROFILE</a> </p>
</div>
<div class="right-links">
    <a href="#"></a>
    <a href="logout.php"> <button>LOG OUT</button class="btn"></a>
</div>
</div>
<center>
<div class="container">
    <div class="box form-box">
    <form action="" method="post">
        <h1> CHANGE PROFILE</h1>
        <br><br>
        <div class="field-input">
        <label for="User Name">User Name</label>
        <input type="text" name="uname" id="User Name">
        </div>
        <br>
         <div class="field-input">
        <label for="Email">Email</label>
        <input type="text" name="Email" id="Email" required>
        </div>
        <br>
        <div class="field-input">
        <label for="Phone Number">Phone Number</label>
        <input type="number" name="Phone Number" id="Phone Number" required>
        </div>
        <br>
    <div class="field">
     <button type="submit" value="update"><a href="logout.php">UPDATE</a></button>
</div>
     <div class="links">
         Already Member? <a href="index.php"> Sign In
         </a>
</div>
</form>
    </div>
    </div>
    </center>
</body>
</html>