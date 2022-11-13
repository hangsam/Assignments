<?php
$string = "abc@grepsr.com";
$exp = preg_match("/abc|@|grepsr.com/",$string);
if($exp){
  echo "A match was found.";
 }else{
  echo "A match was not found.";
}
// echo "<pre>";
// print_r($array);
// echo "</pre>";
?>