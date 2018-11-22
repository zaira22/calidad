<?php

namespace Tests;

use App\Dummy;

class ConsumerTest extends \PHPUnit_Framework_TestCase
{
    /**
    * Probar nombre completo
    */
    public function testNombreCompleto()
    {
        $consumer = new Dummy();
$consumer->setNombre('Zaira');
$consumer->setApellido('Us');
$result = $consumer->nombreCompleto();
$this->assertEquals('Zaira Us', $result);

    }

    
}
