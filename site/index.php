<?php 
session_start();

include 'header.php';?>
<div class="log">
    <a href="register.php" class="btn2">Sign In</a>
    <a href="index.php" class="btn2">Log In</a>
</div>
<div class="userLog"> 
    <form action="login.php" method="POST">
        <label>Username</label>
            <input type="text" name="username"/>
        <label>Password</label>
            <input type="password" name="password"/>
            <input type="submit" value="Connect"/>
    </form>
</div>

