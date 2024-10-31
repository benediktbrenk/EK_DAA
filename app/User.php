<?php

class User {
    public string $senderName;
    public string $senderPassword;
    public string $firstName;
    public string $lastName;

    public function __construct(string $name, string $password, string $firstName, string $lastName) {
        $this->senderName = $name;
        $this->senderPassword = $password;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function login(string $inputName, string $inputPassword): bool {
        if ($inputName === $this->senderName && $inputPassword === $this->senderPassword) {
            return true;
        }
        return false;
    }

    public function register() {
    }
}
?>

 