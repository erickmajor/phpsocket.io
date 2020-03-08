<?php

namespace SocketIO;

/**
 * Class WebSocketUser
 * Websockets User Object
 *
 * @package SocketIO
 * @link https://github.com/ghedipunk/PHP-Websockets PHP WebSockets
 */
class WebSocketUser
{
    public $socket;
    public $id;
    public $name;
    public $headers = [];
    public $handshake = false;

    public $handlingPartialPacket = false;
    public $partialBuffer = "";

    public $sendingContinuous = false;
    public $partialMessage = "";

    public $hasSentClose = false;

    public function __construct($id, $socket)
    {
        $this->id = $id;
        $this->socket = $socket;
    }
}
