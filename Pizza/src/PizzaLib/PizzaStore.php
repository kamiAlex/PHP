<?php

namespace PizzaLib;

class PizzaStore 
{
    public function orderPizza(string $type): void
    {
        $pizza = $this->createPizza($type);

        if ($pizza) {
            $pizza->prepare();
            $pizza->cut();
        } else {
            echo "Такой пиццы нет в меню: {$type}\n";
        }
    }

    public function createPizza(string $type): ?Pizza
    {
        throw new \Exception("мы его переопределять будем");
    }
}
//* Шаблончик  
// class NYPizzaStore extends PizzaStore
// {
//     public function createPizza(string $type): ?Pizza
//     {
//         switch ($type) {
//             case 'Пепперони':
//                 return new PizzaPeperoni();
//             case 'Маргарита':
//                 return new PizzaMargarita();
//             case 'Гавайская':
//                 return new PizzaHawaiian();
//             default:
//                 return null;
//         }
//     }
// }