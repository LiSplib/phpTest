<?php
require_once "../common/utils.php";
function get_posts(): ?Array {
  return parse_json_file(__DIR__ . "/data/posts.json");
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
  save_json_file(get_collection_path("posts"), $posts);
}

