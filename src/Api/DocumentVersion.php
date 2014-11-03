<?php

namespace NovusJuris\Clio\Api;

class DocumentVersion extends Base
{
    var $attr_accessor = 'document_id';

    function __construct( Session $session )
    {
        parent::__construct( $session );

        $this->end_point_url     = "documents/{$this->document_id}/document_versions";
        $this->plural_resource   = 'document_versions';
        $this->singular_resource = 'document_version';
    }

    public function download( $id )
    {
        $session->get("{$this->end_point_url}/$id/download");
    }

    protected function data_item( $params )
    {
        $params['document_id'] = $document_id;
        parent::data_item( $params );
    }

    private function data_klass( $args )
    {
        return array(
            array_shift( $args ),
            array_shift( $args ),
            $args
        );
    }
}