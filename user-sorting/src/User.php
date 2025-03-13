<?php

namespace User;

use DateTime;

class User
{
    private string $username;
    private string $password;
    private DateTime $birthday;

    public function __construct(string $username, string $password, string $birthday)
    {
        $this->username = $username;
        $this->password = $password;
        $this->birthday = new DateTime($birthday);
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getBirthday(): DateTime
    {
        return $this->birthday;
    }
}
