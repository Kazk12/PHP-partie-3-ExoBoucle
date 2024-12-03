<?php

// Exo 2

$PremierNombre = 0;
$DeuxiemeNombre = 20;



// Exo 3

$Un = 100;
$Deuxieme = 3;



// Exo 4

$ini = 1;

// Exo 5




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="Exo1">
        <h2>
            Exo 1
        </h2>
        <p>
            <?php 
            
            for($i = 0; $i < 11; $i += 1){
                echo $i . " ";
                
            }

            ?>
        </p>
    </div>

    <div class="Exo2">
        <h2>
            Exo 2
        </h2>
        <p>
            <?php 
           while($PremierNombre < 11){
            $multiplication = $PremierNombre * $DeuxiemeNombre;
            echo $multiplication . "<br>";
            $PremierNombre +=1;
        }
            
            ?>
        </p>
    </div>
    <div class="Exo3">
        <h2>
            Exo3
        </h2>
        <p>
            <?php 
            // while($Un >= 10){
            //     $multi = $Un * $Deuxieme;
            //     echo $multi . "<br>";
            //     $Un -= 1;
            // }
            
            ?>
        </p>
    </div>
    <div class="Exo4">
        <h2>
            Exo 4
        </h2>
        <p>
            <?php 
            while($ini < 11){
                echo $ini . "<br>";
                $ini += $ini / 2;
            }
            
            ?>
        </p>
    </div>
    <div class="Exo5">
        <h2>
            Exo5
        </h2>
        <p>
            <?php 
            for($i = 1; $i < 16; $i += 1){
                echo $i . " On y arrive presque <br>";
            }

            
            ?>
        </p>
    </div>
    <div class="Exo6">
        <h2>
            Exo6
        </h2>
        <p>
            <?php 
            for($i = 20; $i > 0; $i -= 1){
                echo $i . " C'est presque bon <br>";
            }
            
            
            ?>
        </p>
    </div>
    <div class="Exo7">
        <h2>
            Exo7
        </h2>
        <p>
            <?php 
            for($i = 1; $i < 101; $i += 15){
                echo $i . " On tient le bon bout. <br>";
            }
            
            ?>
        </p>
    </div>

    <div class="Exo8">
        <h2>
            Exo8
        </h2>
        <p>
            <?php 
            
            for($i = 200; $i >= 0; $i -= 12){
                echo $i . " Enfin. <br>";
            }
            
            ?>
        </p>
    </div>


    
</body>
</html>