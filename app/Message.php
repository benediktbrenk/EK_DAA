<?php

class Message {
    public string $body;
    public ?string $senderEmail;

    public function __construct()
    {
        $this->senderEmail = null;
    }
    
    public function send(): bool {
        if ($this->senderEmail) {

            return true;
        }

        return false;
    }

}