<?php

require_once '../common/post.php';

$post_id = $_GET['id'];
$post = get_post($post_id);

deletePost($_GET['id'], $_POST['title'], $_POST['body']);

header('Location: http://localhost/testphp/site/posts.php');

?>