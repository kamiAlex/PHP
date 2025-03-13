<?php

namespace PizzaStore;

use Pizza\Pizza;

class PizzaStore {

    private array $menu = [
        'Маргарита' => ['Томатный', ['Сыр', 'Базилик']],
        'Пепперони' => ['Томатный', ['Сыр', 'Пепперони']],
        'Гавайская' => ['Томатный', ['Сыр', 'Ананасы', 'Ветчина']]
    ];


    public function orderPizza(string $type): void
    {
        if (isset($this->menu[$type])) {
            [$sauce, $toppings] = $this->menu[$type];
            $pizza = new Pizza($type, $sauce, $toppings);
            $pizza->prepare();
            $pizza->cut();
        } else {
            echo "Ошибка: пицца '{$type}' отсутствует в меню.\n";
        }
    }
}
