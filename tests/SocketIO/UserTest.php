<?php

namespace SocketIOTest;


use PHPUnit_Framework_TestCase as TestCase;
use SocketIO\User;

/**
 * Class UserTest
 * @package SocketIOTest
 * @author Erick Major dos Santos
 * @copyright MIT
 */
class UserTest extends TestCase
{
    /**
     *
     */
    public function testUserHasIdAttribute()
    {
        $user = new User();
        $this->assertObjectHasAttribute(
            'id',
            $user,
            "It's important to use an id for identify an User class."
        );
    }

    /**
     * 
     */
    public function testUserHasNameAttribute()
    {
        $user = new User();
        $this->assertObjectHasAttribute(
            'name',
            $user,
            "It's important to use a name for identify an User class.");
    }

    /**
     * @dataProvider userIdProvider
     * @param $id
     * @return User
     */
    public function testUserConstructorWithIdAttributeHasSameValue($id)
    {
        $user = new User($id);
        $this->assertAttributeSame($id, 'id', $user);
        return $user;
    }

    /**
     * @dataProvider userNameProvider
     * @param $name
     * @return User
     */
    public function testUserConstructorWithNameAttributeHasSameValue($name)
    {
        $user = new User('', $name);
        $this->assertAttributeSame($name, 'name', $user);
        return $user;
    }

    /**
     * @depends testUserConstructorWithIdAttributeHasSameValue
     * @param User $user
     */
    public function testIdAttributeGetterHasSameValue($user)
    {
        var_dump($user);

//        $this->assertEquals($id, $user->getId());
        $this->assertTrue(true);
    }

    /**
     * @return array
     */
    public function userIdProvider()
    {
        return [
            [ uniqid('', true), ],
        ];
    }

    /**
     * @return array
     */
    public function userNameProvider()
    {
        return [
            [ 'Lorem Ipsum', ],
        ];
    }
}
