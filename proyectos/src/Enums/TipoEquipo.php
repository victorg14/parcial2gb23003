<?php
namespace Prestamos\Enums;

enum TipoEquipo: string{
    case Laptop = 'laptop';
    case Proyector = 'proyector';

    public function crearEquipo(){
        return match ($this) {
            Laptop => 'laptop' ,
            Proyector => 'proyector' ,
        };
    }
    

}
?>