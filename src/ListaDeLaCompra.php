<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaDeLaCompra
{

    public function process(string $producto): string
    {
        $lista = strtolower($producto);
        return $lista;
    }
}
