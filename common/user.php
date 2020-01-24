<?php
require_once "../common/utils.php";
function get_users(){
  return parse_json_file(__DIR__ . "/data/users.json");
}

function get_user(int $index): ?Array {
    $users = get_users();
    if(!empty($users) && count($users) > $index && $index > -1){
      return $users[$index];
    }
  
    return null;
  }
  


function createUser($username, $password){
  $previewUsers = get_users();
  $previewUsers[] = array('username' => $username, 'password' => $password);
  $newUser = json_encode($previewUsers);
  file_put_contents(__DIR__ . "/data/users.json", $newUser);
}

function deleteUser($user_id, $username, $password){
    $users = get_users();
    $users[$user_id] = array('username' => $username, 'password' => $password);
    unset($users[$user_id]);
    save_json_file(get_collection_path("users"), $users);
  }