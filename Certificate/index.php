<?php

//first way
//$listOfName = explode(",",$_POST['name']);
//$course = $_POST['course'];
//$content=file_get_contents("form.html");
//foreach ($listOfName as $name){
//    $newContent=str_replace(["name","course"],[$name,$course],$content);
//    fopen($name.".html","w");
//    file_put_contents($name.".html",$newContent);
//}


//Second way
include "Certificate.php";
createCertificate($_POST['name'],$_POST['course'],"form.html");