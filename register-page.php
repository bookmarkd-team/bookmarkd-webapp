<?php
    include "navheader.html";
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/register-page.css">

</head>
<body>
<section class="firstform">

<form id= "sign-in-form">


    <div>
    <label id="title">
    Sign Up</br>
    </label>
    </div>

    <div>
    <input type="text" name="username" placeholder="New Username" required/> </br>
    <input type="password" name="password" placeholder="New Password" required/> </br>
    <div id=formbutton>
    </div>

    <div>
    <button type="submit" value="register"  class="button">Register</button> </br>
    <a href="sign-in.php" class="link">Already a user? Login</a>
    </div>


</section>
</form>
</body>
</html>
