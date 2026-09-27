<?php

declare(strict_types=1);

namespace App;

/**
 * Director.
 *
 * Knows the fixed sequence of steps needed to assemble a combo meal,
 * without knowing which concrete builder (or final representation)
 * it is working with.
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
