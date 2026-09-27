<?php

declare(strict_types=1);

namespace App;

/**
 * ConcreteBuilder.
 *
 * Builds the budget-friendly "Value" combo meal representation.
 */
final class ValueComboBuilder implements ComboBuilder
{
    private string $main = 'Fried Chicken';
    private string $side = 'Rice';
    private string $drink = 'Iced Tea';

    public function setMain(string $main): static
    {
        $this->main = $main;

        return $this;
    }

    public function setSide(string $side): static
    {
        $this->side = $side;

        return $this;
    }

    public function setDrink(string $drink): static
    {
        $this->drink = $drink;

        return $this;
    }

    public function getResult(): ComboMeal
    {
        return new ComboMeal($this->main, $this->side, $this->drink);
    }
}
