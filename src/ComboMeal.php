<?php

declare(strict_types=1);

namespace App;

/**
 * Product.
 *
 * The complex object being built. Immutable once constructed.
 */
final class ComboMeal
{
    /**
     * @param array<int, string> $addOns
     */
    public function __construct(
        public readonly string $main,
        public readonly string $side,
        public readonly string $drink,
        public readonly array $addOns = []
    ) {
    }

    public function describe(): string
    {
        $extras = $this->addOns === [] ? 'none' : implode(', ', $this->addOns);

        return sprintf(
            '%s + %s + %s (add-ons: %s)',
            $this->main,
            $this->side,
            $this->drink,
            $extras
        );
    }
}
