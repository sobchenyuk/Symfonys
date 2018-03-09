<?php

namespace AppBundle\Document;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class User extends BaseUser
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;


    /**
     * @MongoDB\name(type="string")
     */
    private $name;


    /**
     * @MongoDB\phone(type="string")
     */
    private $phone;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}