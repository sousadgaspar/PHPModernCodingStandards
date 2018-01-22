<?php namespace SGenial;


class HtmlDocument implements Documentable
{


    protected $url;



    public function __construct ($url)
    {

        $this->url = $url;

    }



    public function getId()
    {

        return $this->url;

    }

    public function getContents()
    {

        $pointer = curl_init();

        curl_setopt($pointer, CURLOPT_URL, $this->url);

        curl_setopt($pointer, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($pointer, CURLOPT_CONNECTIONTIMOUT, 3);

        curl_setopt($pointer, CURLOPT_FOLLOWLOCATION, 1);

        curl_setopt($pointer, CURLOPT_MAXREDIRS, 3);

        $html = curl_exec($pointer);

        curl_close($pointer);

        return $html;

    }



}