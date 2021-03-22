
<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
function h($val){
    return htmlspecialchars($val, ENT_QUETES);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <p><?php echo $name;?></p>
    <p><?php echo $mail;?></p>

    <!-- echoの略語 -->
    <p><?= $name;?></p>
    <p><?= $mail;?></p>

    <!-- XSS対策 -->
    <p><?= htmlspecialchars($name, ENT_QUOTES);?></p>
    <p><?= htmlspecialchars($mail, ENT_QUOTES);?></p>

    <!-- XSSを関数化 ここを読み込んでくれない-->
    <p><?= h($name);?></p>
    <p><?= h($mail);?></p>


</body>
</html>