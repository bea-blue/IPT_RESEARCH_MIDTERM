<?php

declare(strict_types=1);

namespace App;

/**
 * Director.
 */
final class ComboDirector
{
    public function construct(ComboBuilder $builder, string $main, string $side, string $drink): void
    {
        $builder->setMain($main)
            ->setSide($side)
            ->setDrink($drink);
    }
}
