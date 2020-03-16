<?php

namespace SocketIO\WebSocket;

/**
 * Class AbstractWebSocket
 * @package SocketIO\WebSocket
 * @author Erick Major dos Santos
 * @copyright MIT
 */
abstract class AbstractWebSocket
{
    protected $userClass = 'WebSocketUser'; // redefine this if you want a custom user class.  The custom user class should inherit from WebSocketUser.
    protected $maxBufferSize;
    protected $master;
    protected $sockets                              = [];
    protected $users                                = [];
    protected $heldMessages                         = [];
    protected $interactive                          = true;
    protected $headerOriginRequired                 = false;
    protected $headerSecWebSocketProtocolRequired   = false;
    protected $headerSecWebSocketExtensionsRequired = false;

    function __construct($addr, $port, $bufferLength = 2048)
    {
        $this->maxBufferSize = $bufferLength;
        $this->master = socket_create(AF_INET, SOCK_STREAM, SOL_TCP)  or die("Failed: socket_create()");
        socket_set_option($this->master, SOL_SOCKET, SO_REUSEADDR, 1) or die("Failed: socket_option()");
        socket_bind($this->master, $addr, $port)                      or die("Failed: socket_bind()");
        socket_listen($this->master,20)                               or die("Failed: socket_listen()");
        $this->sockets['m'] = $this->master;
        $host= gethostname();
        $ip = gethostbyname($host);
        $this->stdout("Server started\nListening on: $addr:$port\nServer's ip: $ip\nServer's host: $host\nMaster socket: ".$this->master);
    }

    abstract protected function process($user,$message); // Called immediately when the data is recieved.
    abstract protected function connected($user);        // Called after the handshake response is sent to the client.
    abstract protected function closed($user);           // Called after the connection is closed.
}
