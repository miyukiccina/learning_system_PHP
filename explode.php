<?php

 $str_base = "PHP4,PHP5,PHP7";

 //$str_baseに","が見つかったら、配列に格納する
 $str = explode("," , $str_base);

 //配列値を確認するのにvar_dump関数が良いです。
 var_dump($str);

 ?>