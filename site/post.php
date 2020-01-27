<?php 
include 'header.php';
session_start();
require_once '../common/post.php';

require_once '../site/functions.php';

$post_id = $_GET['id'];
$post = get_post($post_id);

?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Le post que vous avez demandé : </h1>
    <h3><?= $post['title']?></h3>
    <p class="lead"><?= $post['body']?></p>
  </div>
</div>
<?php 
    createPostButtons($post_id);
?>



   
