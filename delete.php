<?php
$json = file_get_contents('todo.json'); # Name of the file that we will taske amd save data in it .
$jsonarray = json_decode($json, true); #stop woking code  #فك عمل الكود 
// use input type="hidden"
$todotext = $_POST['todotext2'];
unset($jsonarray[$todotext]);#unset like display:none in css #in this step will send button to input type hidden 
file_put_contents('todo.json', json_encode($jsonarray), JSON_PRETTY_PRINT);
header("Location:inde.php"); // to delete and back to the same page  
