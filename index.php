<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_COOKIE['saisainis'])){
            echo "sveiki" . $_COOKIE['sausainis'];
        } else {
            echo "sveiki svecias";
        }
        
        ?>
        <form action="pasveikinimas.php" method="GET"> 
            <input type="text" name="vardas">iveskite varda <br>
            <input type="submit" name="submit" value="ivesti">           
        </form>

    </body>
</html>
