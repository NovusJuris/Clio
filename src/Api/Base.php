<?php namespace NovusJuris\Clio\Api;

class Base
{
    function __construct($session)
    {
        self::$session = $session;
    }

    private function data_item($params)
    {
        return data_klass($params)->_new($params, $session);
    }
}