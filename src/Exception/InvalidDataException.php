<?php
namespace HTTPSQS\Exception;

class InvalidDataException extends Exception
{
    public function __construct($message = 'Data Must be String!')
    {
        parent::__construct($message);
    }
}