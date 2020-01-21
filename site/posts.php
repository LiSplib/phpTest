<?php require_once '../common/post.php';?>

 <?php include 'header.php';?>
<ul style="padding: 20px; margin: 10px; background: lightgrey; list-style-type: none; font-size: 1.5em; display: flex; justify-content: center;">
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
    <!-- <li style="margin-right: 30px;"><a href="post.php?id=0" style="text-decoration: none;">Post n°1</a></li>
    <li style="margin-right: 30px;"><a href="post.php?id=1" style="text-decoration: none;">Post n°2</a></li>
    <li style="margin-right: 30px;"><a href="post.php?id=2" style="text-decoration: none;">Post n°3</a></li> -->
  </ul>
  <div style="background-color: grey; width: 75px; height: 75px; border-radius: 50%; position: relative;">
    <a href="create.php" style="text-decoration: none; position: absolute; top: 25px; left: 5px;">Add post</a>
  </div>
 