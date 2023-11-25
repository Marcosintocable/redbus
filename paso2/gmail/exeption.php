<?php

namespace PHPMailer;

class Exception extends \Exception
{
    public function errorMessage()
    {
        // Personaliza el mensaje de error según tus necesidades
        return $this->getMessage();
    }
}
