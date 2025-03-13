<?php

namespace User;
use Book\Book;
class User
{
    private string $name;
    private int $userId;
    private array $borrowedBooks;
    private int $penalty;

    public function __construct(string $name, int $userId)
    {
        $this->name = $name;
        $this->userId = $userId;
        $this->borrowedBooks = [];
        $this->penalty = 0;
    }

    public function borrowBook(Book $book): void
    {
        if ($book->isAvailable() && $this->penalty < 10) {
            $book->borrow();
            $this->penalty += 1;
            $this->borrowedBooks[] = $book;
            echo "Книга '{$book->getTitle()}' выдана пользователю {$this->getName()}" . PHP_EOL;
        } else {
            if ($this->penalty === 10) {
                echo "Вы не можете взять книгу т.к превысили лимит в 10 книг единовременно" . PHP_EOL;
            } else {
                echo "Книга '{$book->getTitle()}' недоступна" . PHP_EOL;
            }
        }
    }

    public function returnBook(Book $book): void
    {
        foreach ($this->borrowedBooks as $index => $currentBook) {
            if ($currentBook === $book) {
                unset($this->borrowedBooks[$index]);
                $book->returnBook();
                $this->penalty -= 1;
                echo "Книга '{$book->getTitle()}' возвращена в библиотеку пользователем {$this->getName()}!" . PHP_EOL;
                return;
            }
        }
    }

    public function getPenalty(): int
    {
        return $this->penalty;
    }

    public function getId(): int
    {
        return $this->userId;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
