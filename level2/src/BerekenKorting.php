<?php declare(strict_types=1);

function berekenKortingBedrag(int $totaalCents, bool $isLid): int
{
    // TODO: Bepaal korting (in centen) op basis van regels:
    // - Als $isLid true is: 10% korting
    // - Anders: 0% korting
    //
    // Rond altijd naar beneden af op hele centen.
    // Voorbeeld: 999 cent met 10% => 99 cent korting
    return 0;
}

