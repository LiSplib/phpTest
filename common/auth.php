<?php
session_start();
$_SESSION['admin'] = false;


function do_login(string $username, string $password): bool {
  $allowedUsername = "JeanJean";
  $allowedPassword = '$2y$10$g3DKhjlVkeSTOZOt6Z8Y5uAt/jLDr/s13rszWgy41q5QW.lzs4vWy';

  $adminUserName = "admin";
  $adminPassword = '$2y$10$lQPHgSMd1GX.DpiQzoZ3zu8/aUtmLwU0M2g8O5Hjxn5CtontCtsVK';

  if($username === $allowedUsername && 
     password_verify($password, $allowedPassword)){
       $_SESSION['admin'] = false;
    return true;
  }
  elseif($username === $adminUserName && password_verify($password, $adminPassword)){
    $_SESSION['admin'] = true;
    return true;
  }
  echo 'Username ou Password non reconnu veuillez reessayer.';
  return false;
}