<?php

// session関数　同じ関数をどこでも呼び出せるようになる！
// 下記session startで始める
session_start();

$_SESSION["name"]="nishida";
$_SESSION["age"]=24;

echo $_SESSION["name"];
echo $_SESSION["age"];

?>