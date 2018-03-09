<?php

namespace AppBundle\CouchDocument;


use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ODM\CouchDB\Mapping\Annotations as CouchDB;

/**
 * @CouchDB\Document
 */
class User extends BaseUser
{
    /**
     * @CouchDB\Id
     */
    protected $id;


    /**
     * @CouchDB\name
     */
    private $name;


    /**
     * @CouchDB\phone
     */
    private $phone;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}