<?php

class Domino{
    function __construct() {}

    function fichaDomino(){
        $data = array();
        $ficha = new FichaDomino(2,2,true);
        $ficha = $ficha->ficha;
        array_push($data,$ficha);
        return $data;
    }
}


?>