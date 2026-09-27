<?php 
declare(strict_types=1); 

// ---- Product ---- 
final class ComboMeal 
{ 
    public function __construct( 
        public readonly string $main, 
        public readonly string $side, 
        public readonly string $drink, 
        public readonly array $addOns = [] 
    ) {} 
    public function describe(): string 
    { 
        $extras = $this->addOns === [] ? 'none' : implode(', ', $this->addOns); 
        return sprintf( 
            '%s + %s + %s (add-ons: %s)', 
            $this->main, $this->side, $this->drink, $extras 
        ); 
    } 
} 

// ---- Builder contract ---- 
interface ComboBuilder 
{ 
    public function setMain(string $main): static; 
    public function setSide(string $side): static; 
    public function setDrink(string $drink): static; 
    public function getResult(): ComboMeal; 
} 

// ---- Concrete builders ---- 
final class ValueComboBuilder implements ComboBuilder 
{ 
    private string $main = 'Fried Chicken'; 
    private string $side = 'Rice'; 
    private string $drink = 'Iced Tea'; 
    public function setMain(string $main): static { $this->main = $main; return $this; } 
    public function setSide(string $side): static { $this->side = $side; return $this; } 
    public function setDrink(string $drink): static { $this->drink = $drink; return $this; } 
    public function getResult(): ComboMeal 

    { 
        return new ComboMeal($this->main, $this->side, $this->drink); 
    } 

} 
final class DeluxeComboBuilder implements ComboBuilder 
{ 
    private string $main = 'Grilled Chicken'; 
    private string $side = 'Mashed Potato'; 
    private string $drink = 'Fruit Shake'; 
    private array $addOns = ['Extra Gravy', 'Upsized Drink']; 
    public function setMain(string $main): static { $this->main = $main; return $this; } 
    public function setSide(string $side): static { $this->side = $side; return $this; } 
    public function setDrink(string $drink): static { $this->drink = $drink; return $this; } 
    public function getResult(): ComboMeal 
    { 
        return new ComboMeal($this->main, $this->side, $this->drink, $this->addOns); 
    } 

} 

  

// ---- Director ---- 
final class ComboDirector 
{ 
    public function construct(ComboBuilder $builder, string $main, string $side, string $drink): void 
    { 
        $builder->setMain($main)->setSide($side)->setDrink($drink); 
    } 
} 

  

// ---- Client code ---- 
$director = new ComboDirector(); 
$deluxeBuilder = new DeluxeComboBuilder(); 
$director->construct($deluxeBuilder, 'Grilled Chicken', 'Mashed Potato', 'Fruit Shake'); 
$deluxeMeal = $deluxeBuilder->getResult(); 
echo $deluxeMeal->describe(), PHP_EOL; 
// Grilled Chicken + Mashed Potato + Fruit Shake (add-ons: Extra Gravy, Upsized Drink) 