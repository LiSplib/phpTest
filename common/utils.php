<?php
function parse_json_file($filePath){
    // Get the contents of the JSON file 
  $strJsonFileContents = file_get_contents($filePath);
  return json_decode($strJsonFileContents, true);
}

function save_json_file($filePath, $data){
   $json = json_encode($data);
   file_put_contents($filePath, $json);
}

function get_collection_path($collectionName){
   return __DIR__ . "/data/$collectionName.json";
}