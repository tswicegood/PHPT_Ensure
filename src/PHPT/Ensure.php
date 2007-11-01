<?php

// place holder to bring ensure() into the mix
class PHPT_Ensure
{
    final private function __construct()
    {
        
    }
}

function ensure($value) {
    return new PHPT_Ensure_Policy($value);
}
