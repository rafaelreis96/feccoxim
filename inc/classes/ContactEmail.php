<?php

class ContactEmail {
    public $name;
    public $phone;
    public $email;
    public $subject;
    public $message;
    
    private $to;
    private $headers; 
    
    public function __construct() {
        $this->to = "email.test.com";
    }
    
    public function send() {
        return mail($this->to, $this->subject, $this->formatedMail(), $this->headers);
    }
    
    private function formatedMail() {
        $html = "";
        $html .= "<html>";
        $html .= "<body>";
        $html .= "<body>";
        $html .= "</html>";
        
        return $html;
    }
    
}