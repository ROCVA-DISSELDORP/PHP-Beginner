<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class Level1Test extends TestCase
{
    public function testGroet(): void
    {
        requireOpdracht(1, 'Groet.php');
        $this->assertSame('Hallo, Sam!', groet('Sam'));
        $this->assertSame('Hallo, wereld!', groet('wereld'));
        $this->assertSame('Hallo, A!', groet('A'));
    }

    public function testSom(): void
    {
        requireOpdracht(1, 'Som.php');
        $this->assertSame(0, som(0, 0));
        $this->assertSame(5, som(2, 3));
        $this->assertSame(-1, som(2, -3));
    }

    public function testFormatEuro(): void
    {
        requireOpdracht(1, 'FormatEuro.php');
        $this->assertSame('€0.00', formatEuro(0));
        $this->assertSame('€0.05', formatEuro(5));
        $this->assertSame('€1.23', formatEuro(123));
        $this->assertSame('€123.45', formatEuro(12345));
    }

    public function testHerhaalRegels(): void
    {
        requireOpdracht(1, 'HerhaalRegels.php');
        $this->assertSame('hoi' . PHP_EOL . 'hoi' . PHP_EOL . 'hoi' . PHP_EOL, herhaalRegels('hoi', 3));
        $this->assertSame('', herhaalRegels('x', 0));
        $this->assertSame('a' . PHP_EOL, herhaalRegels('a', 1));
    }

    public function testMaakZin(): void
    {
        requireOpdracht(1, 'MaakZin.php');
        $this->assertSame('De kat eet vis.', maakZin('De kat', 'eet', 'vis'));
        $this->assertSame('Ik leer PHP.', maakZin('Ik', 'leer', 'PHP'));
    }
}

