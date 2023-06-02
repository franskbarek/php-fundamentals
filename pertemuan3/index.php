<!-- <?php 
// Pengulangan


// init
$value = 5;

// for iteration
for($i = 0; $i < $value; $i++){
    echo "Hello world! <br>";
    
}


?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #colorRow {
            background-color: gray;
        }
    </style>

</head>
<body>
    <h1>Test buat table  dan iterasi</h1>


    <table border="1" cellpadding="10" cellspacing="0">
        
        <!-- cara pertama implisit-->
        <!-- <?php 
        for($i = 1; $i <= 3; $i++){
            echo "<tr>";
            for($j = 1; $j <= 5; $j++){
                echo "<td>$i, $j</td>";
            }
            echo "</tr>";
        }
        
        
        
        ?> -->

        <!-- cara kedua (best practice)-->
        <?php for($i = 1; $i <= 5; $i++) : ?>
            
            <?php if($i % 2 == 1) : ?>
            
                <tr id="colorRow">
            
                <?php else : ?>
                
                    <tr>
            
                    <?php endif; ?>
            
            
                    <?php for($j = 1; $j <= 5; $j++): ?>
                    
                   
                   <td id="column">
                        <!-- cara cetak 1 -->
                        <!-- <?php echo "$i,$j"; ?> -->
                        <!-- cara cetak 2 -->
                        <?= "$i,$j"; ?>
                    </td>
                    
                <?php endfor; ?>
            </tr>
            
        <?php endfor; ?>

                
    </table>

            
</body>
</html>