<?php

class PHPT_Ensure_Registry extends PHPT_Registry
{
    static private $_me = null;
    static private $_base_reg = null;

    public function __construct()
    {
        parent::__construct();
        $this->opts = array_merge(
            $this->opts,
            array(
                'ensure_reporter' => 'Default',
            )
        );
    }

    public function __isset($key)
    {
        if (parent::__isset($key) || isset(self::$_base_reg->$key)) {
            return true;
        }
        return false;
    }

    public function __get($key)
    {
        return parent::__isset($key) ? parent::__get($key) : self::$_base_reg->$key;
    }

    public function __set($key, $value)
    {
        parent::__set($key, $value);
        self::$_base_reg->$key = $value;
    }

    public function __unset($key)
    {
        parent::__unset($key);
        unset(self::$_base_reg->$key);
    }

    public static function getInstance()
    {
        if (is_null(self::$_me)) {
            self::$_me = new self();
            self::$_base_reg = PHPT_Registry::getInstance();
        }
        return self::$_me;
    }
}
