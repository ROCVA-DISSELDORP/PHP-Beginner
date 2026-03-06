<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Level2Test extends TestCase
{
    public function testIsVolwassen(): void
    {
        requireOpdracht(2, 'IsVolwassen.php');
        $this->assertFalse(isVolwassen(0));
        $this->assertFalse(isVolwassen(17));
        $this->assertTrue(isVolwassen(18));
        $this->assertTrue(isVolwassen(99));
    }

    public function testGrootsteVanDrie(): void
    {
        requireOpdracht(2, 'GrootsteVanDrie.php');
        $this->assertSame(9, grootsteVanDrie(2, 9, 5));
        $this->assertSame(2, grootsteVanDrie(2, 2, 1));
        $this->assertSame(-1, grootsteVanDrie(-10, -1, -5));
    }

    public function testBerekenKortingBedrag(): void
    {
        requireOpdracht(2, 'BerekenKorting.php');
        $this->assertSame(0, berekenKortingBedrag(1000, false));
        $this->assertSame(100, berekenKortingBedrag(1000, true));
        $this->assertSame(99, berekenKortingBedrag(999, true));
        $this->assertSame(0, berekenKortingBedrag(0, true));
    }

    public function testFizzBuzz(): void
    {
        requireOpdracht(2, 'FizzBuzz.php');
        $this->assertSame('1', fizzBuzz(1));
        $this->assertSame('Fizz', fizzBuzz(3));
        $this->assertSame('Buzz', fizzBuzz(5));
        $this->assertSame('FizzBuzz', fizzBuzz(15));
        $this->assertSame('FizzBuzz', fizzBuzz(30));
    }

    public function testVerzendkosten(): void
    {
        requireOpdracht(2, 'Verzendkosten.php');
        $this->assertSame(495, verzendkosten(0));
        $this->assertSame(495, verzendkosten(4999));
        $this->assertSame(0, verzendkosten(5000));
        $this->assertSame(0, verzendkosten(999999));
    }
}

