<?php
function do_login(string $username, string $password): bool {
  $allowedUsername = "JeanJean";
  $allowedPassword = '$2y$10$g3DKhjlVkeSTOZOt6Z8Y5uAt/jLDr/s13rszWgy41q5QW.lzs4vWy';

  if($username === $allowedUsername && 
     password_verify($password, $allowedPassword)){
    return true;
  }

  return false;
}