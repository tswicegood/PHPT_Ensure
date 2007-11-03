<?php

class PHPT_Ensure_Message
{
    protected $_message = '';
    
    public function __construct($message)
    {
        $this->_message = (string)$message;
    }
    
    public function __toString()
    {
        return $this->_message;
    }
}