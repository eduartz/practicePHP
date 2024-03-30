<?php
/**
 * Crear un script que requiera como parametro un numero
 * El script debe crea una escalera.
 * El numero sera los pasos que tendra la escalera.
 * El inicio como el final debe contener dos pasos recto como respresentacion al piso
 * Ejemplo: (3)
 * ____
 *    |__
 *       |__
 *          |____
 * 
 */
class Escalera {

    public static $paso = "__";
    public static $grada = "|__";

    public function __construct($int) {
        echo self::render($int);
    }

    public static function limpiarParametro($int): ?int {
        if(!is_numeric($int)){
            return null;
        }
        return $int;
    }

    public static function logica($int){
        if($int == 0) {
            return str_repeat(self::$paso,2);
        }

        $string = "";
        $blanco = "X";
        for ($i=1; $i <= $int; $i++) {

            if($i == 1){
                $string .= str_repeat(self::$paso,2)."\n";
                $string .= str_repeat($blanco,4).self::$grada;
            }else{
                $string .= "\n";
                $string .= str_repeat($blanco, 4 + (3 * ($i - 1))).self::$grada;
            }

            if($i == $int){
                $string .= self::$paso;
            }

        }

        return $string;
    }

    public static function render($int) {
        if(self::limpiarParametro($int) === null) {
            return "Parametro invalido: ".$int;
        }

        if($int < 0){
            return "No estan permitidos numeros negativos: (".$int.")";
        }

        if($int > 10){
            return "Demasiados pasos, te vas a cansar!";
        }

        return self::logica($int);
    }

}

// Ejemplo de uso
$parametro = 10;

$xz_inicio = microtime(true);
new Escalera($parametro);
$xz_final = microtime(true);
$xz_resultado = $xz_final - $xz_inicio;
echo "\n";
echo "eduartz: ".$xz_resultado."\n";



