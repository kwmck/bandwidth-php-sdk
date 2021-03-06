<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthLib;

use BandwidthLib\Controllers;

/**
 * BandwidthLib client class
 */
class BandwidthClient
{
    private $config;
    public function __construct($config)
    {
        $this->config = $config;
    }

    private $messaging;
    private $voice;

    /**
     * Provides access to Messaging client
     * @return Messaging\MessagingClient
     */
    public function getMessaging()
    {
        if ($this->messaging == null) {
            $this->messaging = new Messaging\MessagingClient($this->config);
        }
        return $this->messaging;
    }

    /**
     * Provides access to Voice client
     * @return Voice\VoiceClient
     */
    public function getVoice()
    {
        if ($this->voice == null) {
            $this->voice = new Voice\VoiceClient($this->config);
        }
        return $this->voice;
    }

}
