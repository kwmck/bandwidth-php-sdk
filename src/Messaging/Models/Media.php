<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthLib\Messaging\Models;

/**
 * @todo Write general description for this model
 */
class Media implements \JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var object|null $inputStream public property
     */
    public $inputStream;

    /**
     * @todo Write general description for this property
     * @var string|null $content public property
     */
    public $content;

    /**
     * @todo Write general description for this property
     * @var string|null $url public property
     */
    public $url;

    /**
     * @todo Write general description for this property
     * @var string|null $contentLength public property
     */
    public $contentLength;

    /**
     * @todo Write general description for this property
     * @var string|null $contentType public property
     */
    public $contentType;

    /**
     * @todo Write general description for this property
     * @var \BandwidthLib\Models\mixed[]|null $tags public property
     */
    public $tags;

    /**
     * @todo Write general description for this property
     * @var string|null $userId public property
     */
    public $userId;

    /**
     * @todo Write general description for this property
     * @var string|null $mediaName public property
     */
    public $mediaName;

    /**
     * @todo Write general description for this property
     * @var string|null $mediaId public property
     */
    public $mediaId;

    /**
     * @todo Write general description for this property
     * @var string|null $cacheControl public property
     */
    public $cacheControl;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->inputStream   = func_get_arg(0);
            $this->content       = func_get_arg(1);
            $this->url           = func_get_arg(2);
            $this->contentLength = func_get_arg(3);
            $this->contentType   = func_get_arg(4);
            $this->tags          = func_get_arg(5);
            $this->userId        = func_get_arg(6);
            $this->mediaName     = func_get_arg(7);
            $this->mediaId       = func_get_arg(8);
            $this->cacheControl  = func_get_arg(9);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['inputStream']   = $this->inputStream;
        $json['content']       = $this->content;
        $json['url']           = $this->url;
        $json['contentLength'] = $this->contentLength;
        $json['contentType']   = $this->contentType;
        $json['tags']          = $this->tags;
        $json['userId']        = $this->userId;
        $json['mediaName']     = $this->mediaName;
        $json['mediaId']       = $this->mediaId;
        $json['cacheControl']  = $this->cacheControl;

        return array_filter($json);
    }
}
