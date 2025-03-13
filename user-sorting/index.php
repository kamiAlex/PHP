<?php

require 'vendor\autoload.php';

use User\User;
use UserService\UserService;

// Создаем массив пользователей
$users = [
    new User('geloole', '123', '13.01.2012'),
    new User('giloo', '123', '15.05.2006'),
    new User('gilo0gry3', '123', '22.11.2000'),
    new User('gilote', '123', '10.12.1998'),
    new User('giloigan', '123', '01.03.1990'),
    new User('gilolo', '123', '03.07.2010')
];

$userService = new UserService($users);

echo 'Сортировка по дню рождения по убыванию:' . PHP_EOL;
print_r($userService->sortByBirthday(false));

echo 'Сортировка по дню рождения по возрастанию:' . PHP_EOL;
print_r($userService->sortByBirthday(true));

echo 'Сортировка по никнейму по убыванию:' . PHP_EOL;
print_r($userService->sortByUsername(false));

echo 'Сортировка по никнейму по возрастанию:' . PHP_EOL;
print_r($userService->sortByUsername(true));
