<?php
    class Validate {
        public static function validateInput($inputType, $input) {
            switch ($inputType) {
                case 'password':
                    return self::validatePassword($input);
                case 'email':
                    return self::validateEmail($input);
                case 'phone':
                    return self::validatePhoneNumber($input);
                default:
                    return false;
            }
        }

        private static function validatePassword($password) {
            // Password requirements: at least one uppercase letter,
            // at least two numbers, at least one special character,
            // and a minimum length of nine characters
            return preg_match('/^(?=.*[A-Z])(?=.*\d.*\d)(?=.*\W)(?=.*[a-z]).{9,}$/', $password);
        }
        
        #Oppgave 4
        public static function validateEmail($email) {
            $isValid = filter_var($email, FILTER_VALIDATE_EMAIL);

            return $isValid !== false;
        }

        private static function validatePhoneNumber($phoneNumber) {
            // Norwegian phone number format: +47 followed by 8 digits
            return preg_match('/^\+47\d{8}$/', $phoneNumber);
        }
    }
?>