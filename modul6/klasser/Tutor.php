<?php 
    include "User.php";

    /**
     * Tutor class is a subclass of User class. 
     * They have other privileges than a normal user.
     */

     class Tutor extends User {
        public $course;
     

        public function __construct() {
            $this->course = array();
        }

        public function getRole()
        {
            return "Tutor";
        }

        public static function printTutorDetails($tutor) {
            User::printUserDetails($tutor);  
            echo "Courses: " . implode(", ", $tutor->course) . "<br>"; 
        }

    }
?>