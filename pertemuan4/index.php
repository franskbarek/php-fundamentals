<?php

$angka = [10,12,12,34,45,33,44,22,8]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            width: 50px;
            height: 50px;
            background-color: salmon; 
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .box2{
            width: 50px;
            height: 50px;
            background-color: gray; 
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>

<?php for($i = 0; $i < count($angka); $i++) :?>
    <div class="box"><?php echo $angka[$i] ?> </div> 
    <?php endfor; ?>    
    
    
    
    <?php foreach($angka as $el) :?>

    <div class="box2"><?php echo $el ?> </div> 

<?php endforeach; ?>    

</body>
</html>