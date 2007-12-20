<?php

class PHPT_Ensure_Expectation_IsFalse extends PHPT_Ensure_Expectation_Equals
{
    protected $_expectation = false;
    protected $_description = 'value is expected to be false';
}

