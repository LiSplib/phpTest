<?php
// session_start();
function debug($variable){
    echo '<pre>' . print_r($variable, true) . '<pre>';
}

function createPostButtons(int $id = -1){
    ?>
    <div class="crud">
        <a href="create.php" role="button" class="btn btn-outline-success ml-1">Add post</a>
      <?php if($id >= 0 && $_SESSION['admin'] == true){ ?>
                <a href="update.php?id=<?= $id ?>" role="button" class="btn btn-outline-warning ml-1">Edit post</a>
                <a href="delete.php?id=<?= $id ?>" role="button" class="btn btn-outline-danger ml-1">Delete it</a>
        <?php } ?>
                <a href="posts.php" role="button" class="btn btn-outline-secondary ml-1">Go Back</a>

    </div>
    <?php
}