<?php
include 'header.php';?>
<div class="container mt-5">
    <h1>Connect to your Account</h1>
    <div class="userLog"> 
        <form action="login.php" method="POST">
            <label>Username</label>
                <input type="text" name="username"/>
            <label>Password</label>
                <input type="password" name="password"/>
                <input type="submit" value="Connect"/>
        </form>
    </div>
</div>

<?php
include 'footer.php';?>