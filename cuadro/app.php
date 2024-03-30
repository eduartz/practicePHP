<?php
/**
 * Creamos cuadros segun los modelos
 * 
 * MODELS 1:
 * (5,3)    (5,1)   (1,1)   (1,5)
 * o---o    o---o   o       o
 * |   |                    |
 * o---o                    |
 *                          |
 *                          o
 * 
 */
class App {

    public static $posX;
    public static $posY;

    public function __construct($x,$y) {
        self::$posX = self::verificarParametro($x);
        self::$posY = self::verificarParametro($y);
    }

    public static function modelA(){
        if(!self::validarParametros()){
            return "Algo salio mal";
        }

        return self::$posX . " - " .self::$posY;
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

$app = new App(5,1);

echo App::modelA();