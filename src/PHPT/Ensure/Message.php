<?php

abstract class PHPT_Ensure_Message
{
    protected $_message = '';
    
    public function __toString()
    {
        return $this->_message;
    }
}