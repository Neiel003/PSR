<?php

class Calculadora
{
    public function sumar(int $numero1, int $numero2): int
    {
        return $numero1 + $numero2;
    }

    public function mostrarResultado(int $numero1, int $numero2): void
    {
        $resultado = $this->sumar($numero1, $numero2);

        if ($resultado > 10) {
            echo "El resultado es mayor que 10." . PHP_EOL;
        } else {
            echo "El resultado es 10 o menor." . PHP_EOL;
        }

        echo "Resultado: " . $resultado . PHP_EOL;
    }
}

$calculadora = new Calculadora();

$calculadora->mostrarResultado(7, 8);