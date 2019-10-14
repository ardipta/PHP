<?php
    class Cars{
       public $a = 100;
        private $b = 200;
        protected $c = 300;

        public function details(){
            echo $this->b;
        }
    }

    $bmw = new Cars();
    echo $bmw->a;
    echo $bmw->details();
?>