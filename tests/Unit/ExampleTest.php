<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class Calculadora{

    public function sumar($num1, $num2)
    {
        return $num1 + $num2;
    }
}

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $cal = new Calculadora();

        $this->assertEquals(10, $cal->sumar(5,5));
    }
}
