<?php
namespace App\Models;

use Doctrine\ORM\Mapping as ORM;
use Framework\Core\Config;

/**
 * @Entity
 */
class User
{/**
 * @Id
 * @GeneratedValue
 * @Column(type="integer")
 */
    protected $Id;

    /**
     * @Column(type="string" ,length=20)
     */
    protected $UserName;

    /**
     * @Column(type="string", length=13)
     */
    protected $PassWord_hash;


    /**
     * @Column(type="string" ,length=40)
     */
    protected $Email;

    /**
     * @Column(type="boolean" )
     */
    protected $State;


    public function __construct()
    {
        
    }

    /**
     * @param mixed $UserName
     */
    public function setUserName($UserName)
    {
        $this->UserName = $UserName;
    }

    /**
     * @param mixed $State
     */
    public function setState($State)
    {
        $this->State = $State;
    }

    /**
     * @param mixed $PassWord_hash
     */
    public function setPassWordHash($PassWord_hash)
    {
        $this->PassWord_hash = crypt($PassWord_hash,Config::CTYPT_SALT);
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @return mixed
     */
    public function getPassWordHash()
    {
        return $this->PassWord_hash;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Email
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }
}