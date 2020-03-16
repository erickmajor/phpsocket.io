<?php

namespace SocketIO;


/**
 * Class User
 * @package SocketIO
 * @author Erick Major dos Santos
 * @copyright MIT
 */
class User
{
    /**
     * @var
     */
    protected $id;
    /**
     * @var
     */
    protected $name;


    /**
     * User constructor.
     * @param $id
     * @param $name
     */
    public function __construct($id = null, $name = null)
    {
        $this->id = $id;
        $this->name = $name;
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
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}
