<?php
function createPostButtons(int $id = -1){
    ?>
    <div class="crud">
      <div class="addPost">
        <a href="create.php" class="btn">Add post</a>
      </div>
      <?php if($id >= 0){ ?>
            <div class="upPost">
                <a href="update.php?id=<?= $id ?>" class="btn">Edit post</a>
            </div>
            <div class="delete">
                <a href="delete.php?id=<?= $id ?>" class="btn">Delete it</a>
            </div>
            <div class="return">
                <a href="posts.php" class="btn">Go Back</a>
            </div>
            
        <?php } ?>
    </div>
    <?php
}