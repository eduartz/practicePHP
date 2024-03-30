<?php

class App {

    public static $posX;
    public static $posY;

    public function __construct($x,$y) {
        self::$posX = $x;
        self::$posY = $y;
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

        for($b= 1; $b <= self::$posY; $b++){
        
            for($a= 1; $a <= self::$posX; $a++){

                if($b == 1 || $b == self::$posY){

                    if($a == 1 && $b == 1 || $b == self::$posY && $a == self::$posX && $b > 1 && $a > 1){
                        $resultado .= "/";
                    }
                    else if($a == self::$posX && $b == 1 || $b == self::$posY && $a == 1){
                        $resultado .= "\\";
                    }
                    else {
                        $resultado .= "*";
                    }


                }else{
                    $resultado .= $a == 1 || $a == self::$posX ? "*" : " ";
                }

            }
            
            $resultado .= self::$posY == 1 || self::$posY == $b ? "" : "\n";
        }

        return $resultado;
    }
    public static function model02(){
        if(!self::validarParametros()){
            return "Algo salio mal";
        }

        $resultado = "";

        for($b= 1; $b <= self::$posY; $b++){
        
            for($a= 1; $a <= self::$posX; $a++){

                if($b == 1 || $b == self::$posY){

                    if($a == 1 && $b == 1 || $a == self::$posX && $b == 1){
                        $resultado .= "A";
                    }elseif($a == 1 && $b == self::$posY || $a == self::$posX && $b == self::$posY){
                        $resultado .= "C";
                    }else{
                        $resultado .= "B";
                    }


                }else{
                    $resultado .= $a == 1 || $a == self::$posX ? "B" : " ";
                }

            }
            
            $resultado .= self::$posY == 1 || self::$posY == $b ? "" : "\n";
        }

        return $resultado;
    }
    public static function model03(){
        if(!self::validarParametros()){
            return "Algo salio mal";
        }

        $resultado = "";

        for($b= 1; $b <= self::$posY; $b++){
        
            for($a= 1; $a <= self::$posX; $a++){

                if($b == 1 || $b == self::$posY){

                    if($a == 1 && $b == 1 || $b == self::$posY && $a == 1){
                        $resultado .= "A"; 
                    }else if($b == 1 && $a == self::$posX || $a == self::$posX && $b == self::$posY){
                        $resultado .= "C";
                    }else {
                        $resultado .= "B";
                    }


                }else{
                    $resultado .= $a == 1 || $a == self::$posX ? "B" : " ";
                }

            }
            
            $resultado .= self::$posY == 1 || self::$posY == $b ? "" : "\n";
        }

        return $resultado;
    }
    public static function model04(){
        if(!self::validarParametros()){
            return "Algo salio mal";
        }

        $resultado = "";

        for($b= 1; $b <= self::$posY; $b++){
        
            for($a= 1; $a <= self::$posX; $a++){

                if($b == 1 || $b == self::$posY){

                    if($a == 1 && $b == 1 || $b == self::$posY && $a == self::$posX && $b > 1 && $a > 1){
                        $resultado .= "A";
                    }
                    else if($a == self::$posX && $b == 1 || $b == self::$posY && $a == 1){
                        $resultado .= "C";
                    }
                    else {
                        $resultado .= "B";
                    }


                }else{
                    $resultado .= $a == 1 || $a == self::$posX ? "B" : " ";
                }

            }
            
            $resultado .= self::$posY == 1 || self::$posY == $b ? "" : "\n";
        }

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

        if(self::verificarParametro(self::$posX) === null || self::verificarParametro(self::$posY) === null){
            return null;
        }

        return true;
    }

}

$app = new App(1,5);

$parametros = [
    [5,3],
    [5,1],
    [1,1],
    [1,5],
    [4,4]
];

foreach ($parametros as $value) {
    App::$posX = $value[0];
    App::$posY = $value[1];
    echo "PARAMETROS (".$value[0] .",". $value[1] . ")\n";
    echo App::model04();
    echo "\n";
    echo str_repeat("-",16);
    echo "\n";
}