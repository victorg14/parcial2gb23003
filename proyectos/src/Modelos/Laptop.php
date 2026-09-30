<?php
namespace Prestamos\Modelos;
use Prestamos\Modelos\EquipoAbs;

class Laptop extends EquipoAbs{
    public function diasMaximoPrestamos:int{
        return 3;
    }
}

?>