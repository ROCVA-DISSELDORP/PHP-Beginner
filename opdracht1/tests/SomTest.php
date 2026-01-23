<?php

use PHPUnit\Framework\TestCase;

class SomTest extends TestCase
{
    public function testSomVanGetallen()
    {
        require_once __DIR__ . '/../src/oplossing.php';

        $this->assertEquals(7, som(3, 4));
        $this->assertEquals(0, som(-5, 5));
    }
}
