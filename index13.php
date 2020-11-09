<?php

$postalCode = "123-45467";
#camelCase
#camelの方が多い
function checkPostalCode($str){
  $replaced = str_replace("-","",$str);
  $length = strlen($replaced);

  var_dump($length);
  if($length === 7){
    return true;
  }
  return false;
}

var_dump(checkPostalCode($postalCode));
#snakeCase
// check_postal_code()
?>