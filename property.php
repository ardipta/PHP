<?php
    class Cars{
        var $door = 4;
        function carDetails(){
            echo $this->door;
        }
    }

    $bmw = new Cars();
    echo $bmw->door;
    echo $bmw->carDetails();

    function name(){
        echo 'myFunction';
    }
    name();
?>
