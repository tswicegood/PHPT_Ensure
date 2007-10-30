<?php

class PHPT_Section_ENSURE
{
    public function __construct()
    {
        
    }
}

function ensure()
{
    return new PHPT_Ensure_Policy();
}