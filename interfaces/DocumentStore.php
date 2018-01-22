<?php namespace SGenial;



class DocumentStore
{


    protected $data = [];



    public function addDocument (Documentable $document)
    {

        $key = $document[$id];

        $value = $document[$value];

        $this->data[$key] = $value;

    }



    public function getDocuments ()
    {

        return $this->data;

    }


}