<?php
    class Home extends Controller{


        function Data(){
            $modelDemo = $this->model("demoModel");
            echo $modelDemo->getData();
        }
        function Show($a, $b) {
            $modelDemo = $this->model("demoModel");
            $demoView = $modelDemo->demoData($a,$b);
            $this->view("master1",
                                 ["Data"=>$demoView,
                                "Page"=>"detail1",
                                "DataSQL"=>$modelDemo->getDataSQL()]);

        }
    }
?>