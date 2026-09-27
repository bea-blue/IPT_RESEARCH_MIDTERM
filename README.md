# Combo Meal Builder — Builder Design Pattern in PHP

IPT10 Midterm Requirement — Builder design pattern implementation.

**Author:** Marquez, Nathaniel Rae Y. — BSIT 3A
**Course:** IPT10 – Integrative Programming and Technologies
**Instructor:** Sir Romack Natividad, MIT

## What this demonstrates

A food-ordering `ComboMeal` is assembled step by step instead of through one
overloaded constructor. The four Builder participants map to these files:

| Participant     | File                          |
|------------------|-------------------------------|
| Product          | `src/ComboMeal.php`           |
| Builder          | `src/ComboBuilder.php`        |
| ConcreteBuilder  | `src/ValueComboBuilder.php`, `src/DeluxeComboBuilder.php` |
| Director         | `src/ComboDirector.php`       |
| Client           | `public/index.php`            |

## Requirements

- PHP 8.1 or later
- [Composer](https://getcomposer.org/)

## How to run it

```bash
# 1. Clone the repo
git clone https://github.com/<your-username>/combo-meal-builder.git
cd combo-meal-builder

# 2. Generate the autoloader (no external packages needed, just the PSR-4 map)
composer install

# 3. Run the demo
php public/index.php
```

Expected output:

```
=================================================
 Builder Design Pattern in PHP — Combo Meal Demo
=================================================

1. Deluxe combo (built via Director):
   Grilled Chicken + Mashed Potato + Fruit Shake (add-ons: Extra Gravy, Upsized Drink)

2. Value combo (built via Director):
   Fried Chicken + Rice + Iced Tea (add-ons: none)

3. Custom combo (built via fluent chaining, no Director):
   Beef Tapa + Garlic Rice + Calamansi Juice (add-ons: Extra Gravy, Upsized Drink)

Execution completed successfully.
```

## Syntax check (for the assignment's `php -l` requirement)

```bash
php -l src/ComboMeal.php
php -l src/ComboBuilder.php
php -l src/ValueComboBuilder.php
php -l src/DeluxeComboBuilder.php
php -l src/ComboDirector.php
php -l public/index.php
```

Each line should print `No syntax errors detected in <file>`. Take a
screenshot of this output for the submission requirement.

## License

MIT — for academic submission purposes.
