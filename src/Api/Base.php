<?php

namespace NovusJuris\Clio\Api;

class Base
{

    function __construct( Session $session )
    {
        $this->session = $session;
    }

    protected function data_item( $params )
    {
        return $this->data_klass( $params )->_new( $params, $session );
    }
}