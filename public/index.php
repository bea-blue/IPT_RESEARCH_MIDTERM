<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use App\ComboDirector;
use App\DeluxeComboBuilder;
use App\ValueComboBuilder;

echo "=================================================\n";
echo " Builder Design Pattern in PHP — Combo Meal Demo\n";
echo "=================================================\n\n";

$director = new ComboDirector();

// 1. Build a Deluxe combo through the Director (fixed construction recipe).
$deluxeBuilder = new DeluxeComboBuilder();
$director->construct($deluxeBuilder, 'Grilled Chicken', 'Mashed Potato', 'Fruit Shake');
$deluxeMeal = $deluxeBuilder->getResult();

echo "1. Deluxe combo (built via Director):\n";
echo '   ' . $deluxeMeal->describe() . "\n\n";

// 2. Build a Value combo through the Director.
$valueBuilder = new ValueComboBuilder();
$director->construct($valueBuilder, 'Fried Chicken', 'Rice', 'Iced Tea');
$valueMeal = $valueBuilder->getResult();

echo "2. Value combo (built via Director):\n";
echo '   ' . $valueMeal->describe() . "\n\n";

// 3. Build directly through fluent chaining, skipping the Director entirely.
$customMeal = (new DeluxeComboBuilder())
    ->setMain('Beef Tapa')
    ->setSide('Garlic Rice')
    ->setDrink('Calamansi Juice')
    ->getResult();

echo "3. Custom combo (built via fluent chaining, no Director):\n";
echo '   ' . $customMeal->describe() . "\n\n";

echo "Execution completed successfully.\n";
