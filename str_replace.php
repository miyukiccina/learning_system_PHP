<?php
$str_base= "PHP4_PHP5_PHP6_PHP7";

// 変数str= $str_baseと言う関数の中に　”PHP5”と言う文字列があれば”PHP5.5”に置き換える
$str= str_replace("PHP5","PHP5.5",$str_base);
echo $str;

$name_base="山本太郎";
$name = str_replace("山本","Yamamoto",$name_base);
echo $name;

$mail_base="miyukinishida12@gmail";
$mail = str_replace("gmail", "gmail.com", $mail_base);
echo $mail;

?>

