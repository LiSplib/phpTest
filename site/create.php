<?php require_once '../site/posts.php';
?>
<form action="posts.php" method="POST">
    <label>Titre</label>
        <input type="text" placeholder="title" name="title">
    <label>Contenu</label>
        <input type text="text" placeholder="body" name="body">
        <button type="submit">Envoyer</button>

<?php
    if(!isset($_POST['title']) || !isset($_POST['body'])){
        // redirect_to('http://localhost/testphp/site/posts.php');
        return;
    }

    createPost($_POST['title'], $_POST['body']);
    header('Location: http://localhost/testphp/site/posts.php');
    
