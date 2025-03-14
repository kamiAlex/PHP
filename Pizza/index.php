<?php

include 'vendor\autoload.php';

use PizzaLib\PizzaStore;


$store = new PizzaStore();
$store->orderPizza('Пепперони');
$store->orderPizza('Гавайская');
$store->orderPizza('Неизвестная');