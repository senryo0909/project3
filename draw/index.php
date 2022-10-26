<?php
if($_GET["divination"]){
    $rank = array('凶','小吉','小吉','小吉','中吉','中吉','中吉','吉','吉',"大吉");
    $randResult = rand(0, 9);
    $result = array("num" => $randResult, "rank" => $rank[$rankResult]);
}
return $result;
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
    <div>
        <form action="index.php" method="GET">
            <p>0-9の番号を使って好きな数字の羅列を入力してください</p>
            <input type="text" name="divination">
            <input type="submit" value="占う">
            <br>
            <br>
        </form>
            <?php
                echo "date(Y/m/d) . の運勢は";
                echo "選ばれた数字は. {$result["num"]}";
                echo "{$result["rank"]}";
            ?>
    </div>
</body>
</html>