<?php

class DB
{
    private static $instance;
    public $counter;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance))
        {
            self::$instance = new self();
            return self::$instance;
        }

    }

    public function getData()
    {
        $this->counter++;
        return null;
    }
}

$db = DB::getInstance();
var_dump($db);
echo get_class($db)."\n";