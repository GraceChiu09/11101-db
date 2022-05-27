<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>php連線資料庫</h1>
    <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=school2";
    $pdo=new PDO($dsn,'root','');

    $sql="SELECT * FROM `students`,`dept` WHERE `dept`. `id` = `students` . `dept`";

    $row=$pdo->query($sql)->fetchAll(PDO::FETCH_BOTH);

    // echo "<pre>";
    // print_r($row);
    // echo "<pre>";

    echo $row[0][4];
    echo "<pre>";
    echo $row[0]['name'];


    ?>
</body>
</html>