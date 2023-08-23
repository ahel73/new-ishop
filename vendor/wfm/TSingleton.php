<?php


namespace wfm;


trait TSingleton
{

    private static ?self $instance = null; // экземпляр класса в который внедряем трейдл

    private function __construct(){}

    public static function getInstance(): static
    {
        return static::$instance ?? static::$instance = new static();
    }

}