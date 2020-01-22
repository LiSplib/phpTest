<?php
// require_once '../site/posts.php';
session_start();

if($_SESSION['admin'] == false){
    header('Location: http://localhost/testphp/site/index.php');
}
require_once '../common/post.php';
include 'header.php';


    if(isset($_POST['title']) && isset($_POST['body'])){
        createPost($_POST['title'], $_POST['body']);
        header('Location: http://localhost/testphp/site/posts.php');
        exit;
    }

    
 ?>   

<h1>Bienvenue dans ton espace de création de posts.</h1>
<form method="POST" class="newPosts">
    <label class="title2">Titre</label>
        <input type="text" placeholder="title" name="title">
    <label class="title2">Contenu</label>
        <textarea class="bodyPost" type="text" placeholder="body" name="body"></textarea>
        <button type="submit">Envoyer</button>
</form>

