<?php
    class User3 {
        public $first_name;
        public $last_name;
        protected $username;
        public $birth_date;
        protected $registration_date;

        static public $arrayOfDeletedUsernames = array();

        public function __construct() {
            $this -> username = $this -> generateUsername();
            $this -> registration_date = date("d.m.Y");
        }

        protected function generateUsername() {
            $characters = 'abcdefghijklmnopqrstuvwxyz';
            $usernameLength = rand(4, 8);
            $username = '';
        
            for ($i = 0; $i < $usernameLength; $i++) {
                $username .= $characters[rand(0, strlen($characters) - 1)];
            }
            return ucfirst($username);
        }

        public function getName()
        {
            $name = $this->first_name . " " . $this->last_name;
            return $name;
        }

        public function getUsername() {
            return $this->username;
        }

        public static function printUserDetails($user) {
            echo "Name: {$user->getName()}<br>";
            echo "Username: {$user->username}<br>";
            echo "Birthdate: {$user->birth_date}<br>";
            echo "Registration Date: {$user->registration_date}<br>";
            echo "Role: {$user->getRole()}<br>";
        }

        public function getRole()
        {
            return "Student";
        }

        public static function arrayOfDeletedUsernames() {
            $deletedUsernames = User3::$arrayOfDeletedUsernames;
        
            if (count($deletedUsernames) > 0) {
                echo "<p>Name of deleted user: <ul>";
                foreach ($deletedUsernames as $deletedUsername) {
                    echo "<li>$deletedUsername</li>";
                }
                echo "</ul></p>";
            } else {
                echo "No user has been deleted yet.";
            }
        }

        public function __destruct() {
            self::$arrayOfDeletedUsernames[] = $this->username;
        }
    }
?>