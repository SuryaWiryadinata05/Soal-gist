<?php

if(isset($_POST['save'])){
    $simbol = $_POST['simbol'];

    function hasil2($simbol){
        $result = null;
        $i = 0;
        for($i = 0; $i < $simbol; $i++){
            $result = $simbol[$i].$result;
        }
        echo $result;
    }
}


?>