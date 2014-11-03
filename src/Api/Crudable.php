<?php namespace NovusJuris\Clio\Api;

class Crudable {

    public function _new( $params = [] )
    {
        data_item($params);
    }

    public function _create( $params = [] )
    {
        if ( is_array($params) ) {
            $resource = self::create_plural($params);
        } else {
            $resource = self::create_singular(($params);
        }
    }

    public function _update( $id, $params = [] )
    {
        $responsive = $session->put("$end_point_url/$id", json_encode(['singular_resource' => $params]));
        data_item($response['singular_resource']);
    }

    public function _destroy( $id )
    {
        $session->delete("$end_point_url/$id", FALSE);
    }

    private function create_singular($params)
    {
        $response = $session->post($end_point_url, json_encode(['singular_resource' => $params]));
        data_item($response['singular_resource']);
    }

    private function create_plural($params)
    {
        $response = $session->post($end_point_url, json_encode(['plural_resource' => $params]));
        $response['plural_resource'] = array_map();
    }

}