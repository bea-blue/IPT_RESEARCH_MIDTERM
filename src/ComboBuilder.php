<?php

declare(strict_types=1);

namespace App;

/**
 * Builder
 */
interface ComboBuilder
{
    public function setMain(string $main): static;
    public function setSide(string $side): static;
    public function setDrink(string $drink): static;
    public function getResult(): ComboMeal;
}
