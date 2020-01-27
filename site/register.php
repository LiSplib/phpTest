<?php 
    include 'header.php';
?>

<div class="container mt-5">

    <h1>Create a new Account</h1>

        <form action="signin.php" method="POST">

            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control"/>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control"/>
            </div>
            <div class="form-inline">
                <div class="form-group mb-2">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control ml-2"/>
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control ml-2"/>
                </div>
                <button type="submit" value="Connect" class="btn btn-primary mb-2">Sign In</button>
            </div>
        </form>
</div>
<?php include 'footer.php';?>