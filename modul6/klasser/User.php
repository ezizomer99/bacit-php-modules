<?php

class User {
    public $first_name;
    public $last_name;
    public $user_name;
    public $birth_date;
    public $registration_date;

    public function getName()
    {
        $name = $this->first_name . " " . $this->last_name;
        return $name;
    }
        

    public static function getDetails($user)
    {
        echo "Username: {$user->user_name}\n";
        echo "Birthdate: {$user->birth_date}\n";
        echo "Registration Date: {$user->registration_date}\n";
    }

    public function getRole()
    {
        return "Student";
    }

    public static function printUserDetails($user) {
        echo "Name: {$user->getName()}<br>";
        echo "Username: {$user->user_name}<br>";
        echo "Birthdate: {$user->birth_date}<br>";
        echo "Registration Date: {$user->registration_date}<br>";
        echo "Role: {$user->getRole()}<br>";
    }

}
?>