<?php namespace NovusJuris\Clio;

class Session {

    function __construct($credentials = []) {
        $base_scope_url = 'https://app.goclio.com';
        $access_token = $credentials['access_token'];
        $client_id = $credentials['client_id'];
        $client_secret = $credentials['client_secret'];
        $end_points = [];
    }

    function document_versions($document_id) {
        if (!isset($end_points['document_versions']))
            $end_points['document_versions'] = [];

        if(!isset($end_points['document_versions']['document_id'])) {
            $e = Clio::Api::;
        }
        return $end_points['document_versions']['document_id'];
    }

}