<?php declare(strict_types=1);

function verzendkosten(int $bedragCents): int
{
    // TODO: Verzendkosten regels:
    // - Bestelling van 50 euro (5000 cent) of meer => 0 cent verzendkosten
    // - Anders => 495 cent verzendkosten
    return 0;
}

