<?php

function getContent($path){
    return  file_get_contents($path);
}
function getList($listOfName){
    return explode(",",$listOfName);
}

function generateContent($name,$course,$content){
     return str_replace(["name","course"],[$name,$course],$content);
}

function generateFile($fileName,$extension){
    fopen($fileName.".$extension","w");
}
function pushContent($file,$data){
    file_put_contents($file,$data);

}

function createCertificate($listOfName,$courseName,$path){
    $listOfName=getList($listOfName);
    $content=getContent($path);
    foreach ($listOfName as $name){
        $newContent=generateContent($name,$courseName,$content);
        generateFile($name,"html");
        pushContent($name.".html",$newContent);
    }
}