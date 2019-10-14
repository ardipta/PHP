<?php
    class Cars{
        function carDetails(){
            echo 'This is inheritance';
        }
    }
    class Tacoma extends Cars{
        function carInfo(){
            echo "hi";
        }
    }
    $toyota = new Tacoma();
    echo $toyota->carDetails();
    echo $toyota->carInfo();
?>
