<?php namespace SGenial;


class StreamDocument implements Documentable
{
    protected $resource;

    protected $buffer;

    protected $content;

    protected $id;



    public function __construct ($resource, $buffer = 4096)
    {

        $this->resource = $resource;

        $this->buffer = $buffer;

    }

    public function getId()
    {

        return $this->id = 'Resource-' . (int) $this->resource;

    }




    public function getContents()
    {

        rewind($this->resource);

        while(feof($this->resource) === false) {

            $this->content .= fread($this->resource, $this->buffer);

        }

        return $this->content;

    }


}