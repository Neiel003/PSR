<?php

require __DIR__ . '/vendor/autoload.php';

use App\Usuario;

$usuario = new Usuario('Vasti');

echo $usuario->saludar();