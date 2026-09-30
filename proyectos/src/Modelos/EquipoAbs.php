<?php
namespace Prestamos\Modelos;

abstract class EquipoAbs{
    readonly $codigo;
    readonly $nombre;

    public abstract function diasMaximoPrestamos():int;

}
?>