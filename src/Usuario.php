<?php

namespace App;

class Usuario
{
    private string $nombre;

    public function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function saludar(): string
    {
        return "Hola, soy " . $this->nombre;
    }
}