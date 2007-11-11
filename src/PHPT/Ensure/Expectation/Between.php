<?php

/**
 * @todo refactor this into a common ExpectationAbstract_Sequential
 * 		 abstract and use it for Between and NotBetween
 */
class PHPT_Ensure_Expectation_Between implements PHPT_Ensure_Expectation
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
		$greaterThanOrEqual = new PHPT_Ensure_Expectation_GreaterThanOrEqual($this->_lower);
		if (!is_null($greaterThanOrEqual->evaluate($policy))) {
			return $this->_violation($policy);
		}
		$lesserThanOrEqual = new PHPT_Ensure_Expectation_LesserThanOrEqual($this->_upper);
		if (!is_null($lesserThanOrEqual->evaluate($policy))) {
			return $this->_violation($policy);
		}
	}

	private function _violation(PHPT_Ensure_Policy $policy)
	{
		return new PHPT_Ensure_Expectation_Between_Violation(
			$policy,
			array(
				$this->_lower,
				$this->_upper,
			)
		);
	}
}



