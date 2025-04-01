<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaDeLaCompra
{

    public function process(string $producto): string
    {
        $lista = strtolower($producto);

        $intruccion = explode(" ", $lista);

        if(count($intruccion) === 2){
            $intruccionFinal = $intruccion[1] . " x1";

            return $intruccionFinal;
        }

        return implode($intruccion);
    }
}
