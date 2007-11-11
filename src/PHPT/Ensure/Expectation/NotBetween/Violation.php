<?php

class PHPT_Ensure_Expectation_NotBetween_Violation
{
	private $_actual = null;
	private $_lower = null;
	private $_upper = null;

	public function __construct(PHPT_Ensure_Policy $policy, $expectation)
	{
		$this->_actual = $policy->value;
		sort($expectation);
		$this->_lower = array_shift($expectation);
		$this->_upper = array_shift($expectation);
	}

	public function __toString()
	{
		return sprintf(
			'value [%s] was between [%s] and [%s]',
			var_export($this->_actual, true),
			var_export($this->_lower, true),
			var_export($this->_upper, true)
		);
	}
}
