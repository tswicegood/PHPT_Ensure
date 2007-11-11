<?php

class PHPT_Ensure_Expectation_NotBetween implements PHPT_Ensure_Expectation
{
	private $_lower = null;
	private $_upper = null;

    public function __construct($value)
	{
		$value = (array)$value;
		sort($value);
		$this->_lower = array_shift($value);
		$this->_upper = array_shift($value);
	}

    public function evaluate(PHPT_Ensure_Policy $policy) 
	{
		if (!($this->_lower >= $policy->value || $this->_upper <= $policy->value)) {
			return new PHPT_Ensure_Expectation_NotBetween_Violation(
				$policy,
				array(
					$this->_lower,
					$this->_upper,
				)
			);
		}
		return null;
	}
}

