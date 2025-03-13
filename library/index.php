<?php

require 'vendor/autoload.php';

use User\User;
use Book\Book;
use Library\Library;

$library = new Library();

// Топ 10 книг мира :|
$book1 = new Book("1984", "George Orwell");
$book2 = new Book("To Kill a Mockingbird", "Harper Lee");
$book3 = new Book("Blindness", "Jose Saramago");
$book4 = new Book("The Book of Disquiet", "Fernando Pessoa");
$book5 = new Book("The Great Gatsby", "F. Scott Fitzgerald");
$book6 = new Book("The Brothers Karamazov", "Fyodor M. Dostoyevsky");
$book7 = new Book("Canterbury Tales", "Geoffrey Chaucer");
$book8 = new Book("The Castle", "Franz Kafka");
$book9 = new Book("Children of Gebelawi", "Naguib Mahfouz");
$book10 = new Book("Collected Fictions", "Jorge Luis Borges");
$book11 = new Book("Complete Poems", "Giacomo Leopardi");


$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

$user1 = new User("Adolf", 1);
$user2 = new User("Benito duce", 2);

$library->registerUser($user1);
$library->registerUser($user2);


$user1->borrowBook($book1);
$user2->borrowBook($book1);
$user1->returnBook($book1);
$user2->borrowBook($book1);
$user2->returnBook($book1);


$user1->borrowBook($book1);
$user1->borrowBook($book2);
$user1->borrowBook($book3);
$user1->borrowBook($book4);
$user1->borrowBook($book5);
$user1->borrowBook($book6);
$user1->borrowBook($book7);
$user1->borrowBook($book8);
$user1->borrowBook($book9);
$user1->borrowBook($book10);
$user1->borrowBook($book11);


print_r($library->findBookByTitle("1984"));
print_r($library->findUserById(1));