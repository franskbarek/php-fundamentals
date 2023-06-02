<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .list{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{
            clear:both;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <h1>Array associative</h1>

<?php

$angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];

?>



<?php foreach ($angka as $el): ?>
<?php foreach ($el as $elb): ?>

    <div class="list"><?=$elb?></div>

<?php endforeach;?>
        <div class="clear"></div>
<?php endforeach;?>

</body>
</html>