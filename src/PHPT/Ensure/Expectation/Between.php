<?php

/**
 * @todo refactor this into a common ExpectationAbstract_Sequential
 * 		 abstract and use it for Between and NotBetween
 */
class PHPT_Ensure_Expectation_Between implements PHPT_Ensure_Expectation
{
	private $_lower = null;
	private $_upper = null;
    private $_status = false;

    public function __construct($value = null)
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
		$greaterThanOrEqual = new PHPT_Ensure_Expectation_GreaterThanOrEqual($this->_lower);
        $greaterThanOrEqual->evaluate($policy);
        if ($greaterThanOrEqual->status === false) {
            $this->_status = false;
            return;
		}
		$lesserThanOrEqual = new PHPT_Ensure_Expectation_LesserThanOrEqual($this->_upper);
        $lesserThanOrEqual->evaluate($policy);
		if ($lesserThanOrEqual->status === false) {
            $this->_status = false;
			return;
		}

        $this->_status = true;
	}

    public function getDescription()
    {
        return sprintf('value is expected to be between %d and %d', $this->_lower, $this->_upper);
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



