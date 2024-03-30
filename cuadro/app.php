<?php

class App {

    public static $posX;
    public static $posY;

    public function __construct($x,$y) {
        self::$posX = self::verificarParametro($x);
        self::$posY = self::verificarParametro($y);
    }

    public static function model00(){
        if(!self::validarParametros()){
            return "Algo salio mal";
        }

        $resultado = "";

        for($b= 1; $b <= self::$posY; $b++){
            
            for($a= 1; $a <= self::$posX; $a++){
    
                if($b == 1  || $b == self::$posY){
                    $resultado .= $a == 1 || $a == self::$posX ? "o" : "-";
                }else{
                    $resultado .= $a == 1 || $a == self::$posX ? "|" : " ";
                }
    
            }

            $resultado .= self::$posY == 1 || self::$posY == $b ? "" : "\n";
        }


        return $resultado;
    }

    public static function model01(){
        if(!self::validarParametros()){
            return "Algo salio mal";
        }

        $resultado = "";

        return $resultado;
    }

    public static function verificarParametro ($int): ?int {
        if(!is_numeric($int)){
            return null;
        }

        if($int <= 0){
            return null;
        }

        return $int;
    }

    public static function validarParametros (){
        if(self::$posX === null || self::$posY === null){
            return null;
        }

        return true;
    }

}

$app = new App(1,5);

echo App::model00();