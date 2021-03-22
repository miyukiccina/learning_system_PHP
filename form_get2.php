
<?php

// get関数は受け取るためのものなので、受け取ったら別の簡単な関数に入れ込む
// GET関数をそのままechoすることもできる

$name = $_GET["name"];
echo $name;

$mail = $_GET["mail"];
echo $mail;

echo $_GET["mail"];

?>