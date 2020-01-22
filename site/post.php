<?php 
include 'header.php';

require_once '../common/post.php';

require_once '../site/functions.php';

$post_id = $_GET['id'];
$post = get_post($post_id);

?>
<h2 style="text-align: center">Le post que vous avez demandé : </h2>
<h3 style="height: 30px; padding-top: 15px; text-align: center; background: #f57900; color: black;"><?= $post['title']?></h3>
<p style="text-align: center; background: #eeeeec; color: black;"><?= $post['body']?></p>

<?php 
    createPostButtons($post_id);
?>



   
