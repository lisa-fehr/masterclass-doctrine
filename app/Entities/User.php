<?php

namespace App\Entities;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use LaravelDoctrine\ORM\Auth\Authenticatable;
use Somnambulist\Doctrine\Contracts\Identifiable as IdentifiableContract;
use Somnambulist\Doctrine\Traits\Identifiable;

/**
 * Class User
 *
 * @package    App\Entities
 * @subpackage App\Entities\User
 */
class User implements IdentifiableContract, AuthenticatableContract
{

    use Identifiable;
    use Authenticatable;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $password;

    /**
     * Constructor.
     *
     * @param null|string $username
     * @param null|string $email
     * @param null|string $password
     */
    public function __construct($username = null, $email = null, $password = null)
    {
        $this->username = $username;
        $this->email    = $email;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     *
     * @return Comment
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Comment
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     *
     * @return Comment
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}