<?php
$result = array($_POST["port"], $_POST["lang"], $_POST["mysql"], $_POST["name"]);

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
<p><?php echo $result[3] ?>さんの結果は・・・？</p>
<p>①の答え</p>
<?php echo $result[0]; ?>
<p>②の答え</p>
<?php echo $result[1]; ?>
<p>③の答え</p>
<?php echo $result[2]; ?>
</body>
</html>