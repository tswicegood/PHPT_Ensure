<?php

class PHPT_Section_ENSURE implements PHPT_Section_FILEModifier, PHPT_Section
{
    public function __construct()
    {
        
    }
    
    public function modifyFile(PHPT_Section_FILE $file)
    {
        $file->contents = '<?php class_exists(\'PHPT_Ensure\', true); ?>' . $file->contents;
    }
}
