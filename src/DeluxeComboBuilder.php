<?php

declare(strict_types=1);

namespace App;

/**
 * ConcreteBuilder.
 */
final class DeluxeComboBuilder implements ComboBuilder
{
    private string $main = 'Grilled Chicken';
    private string $side = 'Mashed Potato';
    private string $drink = 'Fruit Shake';

    /** @var array<int, string> */
    private array $addOns = ['Extra Gravy', 'Upsized Drink'];

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
        return new ComboMeal($this->main, $this->side, $this->drink, $this->addOns);
    }
}
