<?php namespace NovusJuris\Clio\Api;

class DocumentVersion extends Base
{

    function __construct()
    {
        $end_point_url = "documents/$document_id/document_versions";
        $plural_resource = 'document_versions';
        $singular_resource = 'document_version';
    }

    public function download($id)
    {
        $session->get("$end_point_url/$id/download");
    }

    private function data_item($params)
    {
        $params['document_id'] = $document_id;
        parent::data_item($params);
    }

    private function data_klass($args)
    {
        return array(
            array_shift($args),
            array_shift($args),
            $args
        );
    }
}