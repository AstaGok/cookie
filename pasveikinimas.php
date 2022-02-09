<?php

if (isset($_GET['vardas'])){
setcookie("sausainis", $_GET['vardas'], time()+60*60*24*365);
}

        
        
header("localhost: index.php");
