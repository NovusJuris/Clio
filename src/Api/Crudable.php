<?php

namespace NovusJuris\Clio\Api;

Trait Crudable
{
    public function _new( $params = [] )
    {
        $this->data_item( $params );
    }

    public function _create( $params = [] )
    {
        if ( is_array( $params ) ) {
            $resource = self::create_plural( $params );
        } else {
            $resource = self::create_singular( $params );
        }
    }

    public function _update( $id, $params = [] )
    {
        $response = $session->put( "{$this->end_point_url}/$id", json_encode(['singular_resource' => $params]) );
        $this->data_item( $response['singular_resource'] );
    }

    public function _destroy( $id )
    {
        $session->delete( "{$this->end_point_url}/$id", false );
    }

    private function create_singular( $params )
    {
        $response = $session->post( $this->end_point_url, json_encode(['singular_resource' => $params]) );
        $this->data_item( $response['singular_resource'] );
    }

    private function create_plural( $params )
    {
        $response = $session->post( $this->end_point_url, json_encode(['plural_resource' => $params]) );
        $response['plural_resource'] = array_map();
    }

}