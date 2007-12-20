<?php

class PHPT_Ensure_Expectation_IsTrue extends PHPT_Ensure_Expectation_Equals
{
    protected $_expectation = true;
    protected $_description = 'value is expected to be true';
}

