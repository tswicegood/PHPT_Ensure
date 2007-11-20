<?php

class PHPT_Section_ENSURE implements PHPT_Section_FILEModifier, PHPT_Section
{
    public function __construct()
    {
        
    }
    
    public function modifyFile(PHPT_Section_FILE $file)
    {
        $reflection = new ReflectionClass('PHPT_Framework');
        $framework_path = $reflection->getFileName();
        $file->contents = "<?php\n" . 
                          "require_once '{$framework_path}';\n" .
                          "class_exists('PHPT_Ensure', true);\n" .
                          '?>' . $file->contents;
    }
}
