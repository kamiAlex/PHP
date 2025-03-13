<?php
namespace UserService;

use User\User;

class UserService
{
    private array $users;

    public function __construct(array $users)
    {
        $this->users = $users;
    }

    public function sortByUsername(bool $ascending): array
    {
        usort($this->users, function (User $user1, User $user2) use ($ascending): int 
        {
            $username1 = $user1->getUsername();
            $username2 = $user2->getUsername();
            
            if ($ascending) {
                return strcmp($username1, $username2);
            }
            return strcmp($username2, $username1);
        });
        return $this->users;
    }

    public function sortByBirthday(bool $ascending): array
    {
        usort($this->users, function (User $user1, User $user2) use ($ascending): int 
        {
            $birthday1 = $user1->getBirthday();
            $birthday2 = $user2->getBirthday();

            if ($ascending) {
                return $birthday1 <=> $birthday2;
            }
            return $birthday2 <=> $birthday1;
        });
        return $this->users;
    }
}
