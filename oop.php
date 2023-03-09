<?php
    class MyClass {

        public $x, $y, $z;

        public function mysum(){
                
            $this->z = $this->x + $this->y;
            return $this->z;
        }

    }



    $asad = new MyClass();
    $asad->x = 100;
    $asad->y = 150;
    echo $asad->mysum();

?>