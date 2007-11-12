<?php

class PHPT_Ensure_Expectation_NotBetween implements PHPT_Ensure_Expectation
{
	private $_lower = null;
	private $_upper = null;
    private $_status = false;

    public function __construct($value)
	{
		$value = (array)$value;
		sort($value);
		$this->_lower = array_shift($value);
		$this->_upper = array_shift($value);
	}

    public function __get($key)
    {
        if ($key == 'status') {
            return $this->_status;
        }
    }

    public function evaluate(PHPT_Ensure_Policy $policy) 
	{
		$this->_status = (bool)($this->_lower >= $policy->value || $this->_upper <= $policy->value);
    }

    public function getDescription()
    {

    }
}

