<?php 
session_start();

include 'header.php';?>
    <form action="login.php" method="POST">
        <label>Username</label>
            <input type="text" name="username"/>
        <label>Password</label>
            <input type="password" name="password"/>
            <input type="submit" value="Login"/>
    </form>


