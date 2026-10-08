<?php

class Usuario
{
    public const TIPO_USUARIO = 'Estudiante';

    private string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function obtenerNombre(): string
    {
        return $this->nombre;
    }

    public function mostrarInformacion(): void
    {
        echo "Nombre: " . $this->obtenerNombre() . PHP_EOL;
        echo "Tipo: " . self::TIPO_USUARIO . PHP_EOL;
    }
}

$usuario = new Usuario('Vasti Legaspi');

$usuario->mostrarInformacion();