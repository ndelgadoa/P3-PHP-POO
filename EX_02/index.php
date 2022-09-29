<?php
class Empleado
{
    public $nombre;
    public $sueldo;

    function __construct($nombre, $sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
    public function metodo(){
        if ($this->sueldo > 2000) {
            echo $this->nombre . " tienes que pagar impuestos";
        } else {
            echo this->nombre . " no tienes que pagar impuestos";
        }
    }
}

$a = new empleado("Nil", 2100);
$a->metodo();
?>