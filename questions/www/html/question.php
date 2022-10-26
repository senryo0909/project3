<?php
$ports = ["80","22","20","21"];
$lang = ["php","python","java","html"];
$mysql = ["join","select","insert","update"];
$name = $_POST["name"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-color: gray;
    }
    h1 {
        color: white;
        font-weight: 100;
    }
    p {
        border-bottom: 2px solid white;
    }
  </style>
</head>
<body>
    <p>お疲れ様です<?php echo $name ?>さん</p>
    
<h2>①ネットワークのポート番号は何番？</h2>
<form action="answer.php" method="post">
<?php 
foreach($ports as $val) {
   echo "<input type='radio' name='port' value='$val'>";
   echo $val;
}
?>

<h2>②Webページを作成するための言語は？</h2>
<?php
foreach($lang as $val) {
   echo "<input type='radio' name='lang' value='$val'>";
   echo $val;
}
?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<?php
foreach($mysql as $val) {
   echo "<input type='radio' name='mysql' value='$val'>";
   echo $val;
}
?>
<input type="hidden" name="name" value="<?php echo $name ?>">
<br>
<input type="submit" value="解答する">
</form>
</body>
</html>