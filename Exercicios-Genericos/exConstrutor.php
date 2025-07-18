<?php
    class User
    {
        public function __construct(private string $name, private int $age)
        {
        }

        public function info()
        {
            return $this->name . ", " . $this->age ." anos";

        }
    }
    $user = new User('John Doe',42);
    echo $user->info();