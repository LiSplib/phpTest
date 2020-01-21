<?php require_once '../site/posts.php';
$post_id = $_GET['id'];
$post = get_post($post_id);

?>
<h2 style="text-align: center">Le post que vous avez demandé : </h2>
<h3 style="height: 50px; padding-top: 25px; text-align: center; background: black; color: white;"><?= $post['title']?></h3>
<p style="text-align: center; background: lightgrey; color: black;"><?= $post['body']?></p>





   
