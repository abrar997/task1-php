<?php 
$todotext=$_POST['todotext'];

// Strip whitespace (or other characters) from the beginning and end of a string
$todotext=trim($todotext);
// to check 
if(isset($_POST['submit'])){
$json=file_get_contents('todo.json') ;# Name of the file to read.
$jsonarray= json_decode($json,true); #use for convert a JSON object to a PHP object.
# and benifit when u add multiple task all of them will save in  browser if delete it browser will print only one value and other values will save in json file
// syntax of new array save in todo.json as -->"hello world":{"completed":true}
$jsonarray[$todotext]=["completed"=>true];
//  Path to the file where to write the data.json_encode(path,syntax, use with encoded to Use whitespace in returned data to format it.)
file_put_contents('todo.json',json_encode($jsonarray),JSON_PRETTY_PRINT);   #convert from  array to json object  string   #method for json use to convert data 

}
// back to the main page 
header("Location:inde.php");

