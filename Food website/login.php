<?php
if (isset($_POST['uname']) && isset($_POST['password']))
{
    function  validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
         return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if(empty($uname))
    {
        header("location: index.php?error=User Name is Required");
        exit();
    }
    else if(empty($pass))
    {
        header("location: index.php?error=Password is Required");
        exit();
    }
    else{
          echo "Login Successfully";
           
        }
    }
    else{
        header("Location: index.php");
    }
    




?>