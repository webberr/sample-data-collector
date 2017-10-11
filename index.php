<?php 
// The code below uses php://input instead of $_POST as 
//  the data we are processing is not html form based post,
//  but rather raw json that $_POST does not process.
$postdata = file_get_contents("php://input") . "\n\n";
print_r($postdata);
file_put_contents('mydata.txt', serialize($postdata), FILE_APPEND | LOCK_EX); 
?>
