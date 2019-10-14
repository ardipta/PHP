<?php
    class Cars{
        function details(){
            echo 'This is Instance';
        }
    }
    $bmw = new Cars();
    echo $bmw->details();
?>
