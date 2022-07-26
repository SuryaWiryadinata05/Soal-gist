<?php

if(isset($_POST['save'])){
    $binary = $_POST['binaryoption'];

    function hasil2($binary){
        $result = null;
        $i = 0;
        for($i = 0; $i < $binary; $i++){
            $result = $binary[$i].$result;
        }
        echo $result;
    }
}


?>