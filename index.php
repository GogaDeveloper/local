<?php
$name = "Биридзе Егор Алексеевич";
$a = array(
    'Misha' => 1,
    'Dima' => 2,
    'Anton' => 3,
    'Vladik' => 4,
    'Egor' => 5,
    'Danya' => 6,
    'Kerik' => 7,
    'Alba' => 8,
    'Vova' => 9,
    'Tima' => 10,
    );
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class ="text">
        <p><?=$name?></p>
    </div>

    <?php foreach ($a as $b => $v) { ?>
        <div><?php echo "$b => $v \n"; ?></div
    <?php } ?>
</body>
</html>
