<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\ListaDeLaCompra;
use PHPUnit\Framework\TestCase;

class ListaDeLaCompraTest extends TestCase
{
    /**
     * @test
     **/
    public function givenAWordInUppercaseReturnTheSameWordInLowercase(): void
    {
        $listaDeLaCompra = new ListaDeLaCompra();

        $result = $listaDeLaCompra->process("Pan");

        $this->assertEquals("pan", $result);

    }


}
