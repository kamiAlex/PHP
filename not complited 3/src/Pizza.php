<?php

namespace Pizza;

class Pizza
{
    private string $name;
    private string $sauce;
    private array $toppings;

    public function __construct($name, $sauce, $toppings)
    {
        $this->name = $name;
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }

    public function prepare(): void
    {
        echo "Началась готовка пиццы '{$this->name}'\n";
        echo "Добавлен соус '{$this->sauce}'\n";
        echo "Добавлены топики: ";
        foreach($this->toppings as $topping) {
            echo $topping . ', ';
        }
    }

    public function cut(): void
    {
        echo "\nДанную пиццу нарезают по диагонали\n";
    }
}