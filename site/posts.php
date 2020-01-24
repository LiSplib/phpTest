<?php session_start(); 
require_once '../common/post.php';
require_once '../site/functions.php';

include 'header.php';?>
<h1>Welcome <?= $_SESSION['username'] ?></h1>
<ul class="mt-5 list-group text-center">
<?php 
    $posts = get_posts();
    $counter = 0;
    foreach($posts as $post){
        ?>
            <li class="list-group-item"><a href="post.php?id=<?= $counter?>">Post n°<?= $counter ?></a></li>

        <?php
        $counter++;
    }
  ?>
  </ul>
    <?php
      if($_SESSION['admin'] == true){
        createPostButtons();
     };?>