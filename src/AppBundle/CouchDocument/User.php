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

    protected $name;

    protected $phone;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
}