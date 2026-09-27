<?php

declare(strict_types=1);

namespace App;

/**
 * Builder.
 *
 * Declares the construction steps that every concrete builder must
 * implement, plus a method that returns the finished product.
 */
interface ComboBuilder
{
    public function setMain(string $main): static;

    public function setSide(string $side): static;

    public function setDrink(string $drink): static;

    public function getResult(): ComboMeal;
}
