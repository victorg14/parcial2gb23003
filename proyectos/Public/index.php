<?php

require __DIR__ . '/../vendor/autoload.php';

use use Prestamos\Enums\TipoEquipo;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title>
     <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="containerRegistroDatos">
        <form action="" method="post">
            <div class="campo">
                <label for="">Carnet</label>
                <input type="text" name="carnet">
            </div>
            <div class="campo">
                <label for="">Codigo</label>
                <input type="text" name="codigo">
            </div>
            <div class="campo">
                <label for="">Nombre</label>
                <input type="text name="nombre"">
            </div>
            <div class="campo">
                <label for="">Tipo</label>
                <select name="tipo" id="">
                    <option value="">Seleccione un tipo</option>
                    
                </select>
            </div>
            <div class="campo">
                <label for="">Dias Maximos</label>
            </div>
            <button>Guardar Dato</button>
        </form>
    </div>
    
</body>
</html>