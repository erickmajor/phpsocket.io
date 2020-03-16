<?php

namespace SocketIO\User;

/**
 * Class AbstractUser
 * @package SocketIO\User
 * @author Erick Major dos Santos
 * @copyright MIT
 */
abstract class AbstractUser
{
    /**
     * @var
     */
    protected $id;
    /**
     * @var
     */
    protected $socket;


    /**
     * AbstractUser constructor.
     * @param $id
     * @param $socket
     */
    public function __construct($id, $socket)
    {
        $this->id = $id;
        $this->socket = $socket;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSocket()
    {
        return $this->socket;
    }

    /**
     * @param mixed $socket
     */
    public function setSocket($socket)
    {
        $this->socket = $socket;
    }
}
