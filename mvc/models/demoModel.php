<?php
    class demoModel extends DB{
        public function getData(){
            return "data";
        }

        public function demoData($a, $b){
            return $a. " and " .$b;
        }
        public function getDataSQL(){
            $qr = "SELECT * from `person`";
            return mysqli_query($this->con, $qr);
        }

    }
?>