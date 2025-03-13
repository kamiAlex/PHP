<?php

namespace Library;

use User\User;
use Book\Book;


class Library
{
    private array $books;
    private array $users;

    public function __construct()
    {
        $this->books = [];
        $this->users = [];
    }

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
        echo "Книга {$book->getTitle()} успешно добавлена!" . PHP_EOL;
    }

    public function registerUser(User $user): void
    {
        $this->users[] = $user;
        echo "Пользователь {$user->getName()} успешно зарегестрирован!" . PHP_EOL;
    }

    public function findBookByTitle(string $title)
    {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book;
            }
        }
    }

    public function findUserById(int $userID)
    {
        foreach ($this->users as $user) {
            if ($user->getID() === $userID) {
                return $user;
            }
        }
    }
}
