<?php
//require_once '../site/posts.php';
session_start();

if($_SESSION['admin'] == false){
    header('Location: http://localhost/testphp/site/index.php');
}

require_once '../common/post.php';

$post_id = $_GET['id'];
$post = get_post($post_id);

include 'header.php';
if(isset($_POST['title']) && isset($_POST['body'])){
    updatePost($_GET['id'], $_POST['title'], $_POST['body']);
    header('Location: http://localhost/testphp/site/posts.php');
exit;
}
?>
<h1>Bienvenue dans ton espace de modification de posts.</h1>
<form method="POST" class="newPosts">
    <label class="title2">Titre</label>
        <input type="text" name="title" value="<?= $post['title']?>">
    <label class="title2">Contenu</label>
        <textarea class="bodyPost" type="text" name="body"><?= $post['body']?></textarea>
        <button class="submit" type="submit">Envoyer</button>
</form>

    

    
    
