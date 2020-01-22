<?php
function get_posts(): ?Array {
  // Get the contents of the JSON file 
  $strJsonFileContents = file_get_contents(__DIR__ . "/data/posts.json");

  return json_decode($strJsonFileContents, true);
}

function get_post(int $index): ?Array {
  $posts = get_posts();
  if(!empty($posts) && count($posts) > $index && $index > -1){
    return $posts[$index];
  }

  return null;
}

function createPost($title, $body){
  $previewData = get_posts();
  $previewData[] = array('title' => $title, 'body' => $body);
  $newPost = json_encode($previewData);
  file_put_contents(__DIR__ . "/data/posts.json", $newPost);
}

function updatePost($post_id, $newTitle, $newBody){
  $posts = get_posts();
  $posts[$post_id] = array('title' => $newTitle, 'body' => $newBody);
  $newPosts = json_encode($posts);
  file_put_contents(__DIR__ . "/data/posts.json", $newPosts);
}

function deletePost($post_id, $title, $body){
  $posts = get_posts();
  $posts[$post_id] = array('title' => $title, 'body' => $body);
  unset($posts[$post_id]);
  $newPosts = json_encode($posts);
  file_put_contents(__DIR__ . "/data/posts.json", $newPosts);
}