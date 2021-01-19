<?php


class FirstController extends Controller{

    private $model;

    function __construct() {
        $this->model = $this->model("First");
    }

    function display(){

        $data = $this->model->fichaDomino();
        print_r($data);
        $this->view("FirstView",$data);
    }

}



?>