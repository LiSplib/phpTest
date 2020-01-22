<?php session_start(); 
require_once '../common/post.php';
require_once '../site/functions.php';

include 'header.php';?>
<h1>Welcome <?= $_SESSION['username'] ?></h1>
<ul style="padding: 20px; margin: 10px; background: #f57900; list-style-type: none; font-size: 1.5em; display: flex; justify-content: center;">
<?php 
    $posts = get_posts();
    $counter = 0;
    foreach($posts as $post){
        ?>
            <li style="margin-right: 30px;"><a href="post.php?id=<?= $counter?>" style="text-decoration: none;">Post n°<?= $counter ?></a></li>

        <?php
        $counter++;
    }
  ?>
  </ul>
    <?php
      if($_SESSION['admin'] == true){
        createPostButtons();
     };?>