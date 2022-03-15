<?php
/**
 * this is a test composer repos
 */
namespace test\repos;

/**
 * Class User
 * @package test\repos
 */
class User
{
    /**
     * get username
     * @return string
     */
    static public function getUserName()
    {
        return 'dyongjun';
    }

    /**
     * get email
     * @return string
     */
    static public function getEmail()
    {
        return '749867713@qq.com';
    }
}