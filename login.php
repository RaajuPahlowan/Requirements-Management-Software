<?php
    session_start();
    
    if(isset($_REQUEST['msg'])){
        if($_REQUEST['msg'] == 'error'){
            echo "Invalid username/password";
        }
    }
?>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
<fieldset>
<legend>LOGIN</legend>
            <form method="POST" action="loginCheck.php" enctype="">
            Username: <input type="text" name="username" value="" /><br>
            Password: <input type="password" name="password" value="" /> <br>

</br>
<hr>

            <input type="submit" name="submit" value="Submit" />
            
            <a href = "signup.php"> Not registered yet?

        </form>
</fieldset>
</body>
</html>


