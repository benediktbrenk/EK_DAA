<?php

class User {
    private string $senderName;
    private string $senderPassword;
    private string $firstName;
    private string $lastName;

    public function __construct() {
    }

    public function setPassword(string $password): void {
        $this->senderPassword = password_hash($password, PASSWORD_DEFAULT);
    }

    public function verifyPassword(string $plainPassword): bool {
        return password_verify($plainPassword, $this->senderPassword);
    }

    public function login(string $inputName, string $inputPassword): bool {
        if ($inputName === $this->senderName && $this->verifyPassword($inputPassword)) {
            return true;
        }
        return false;
    }

    public function getSenderName(): string {
        return $this->senderName;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    public function setSenderName(string $name): void {
        $this->senderName = $name;
    }

    public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }
}
?>
