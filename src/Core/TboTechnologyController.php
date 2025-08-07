<?php

namespace TboTechnology\Core;

use phpseclib3\Crypt\RSA;
use phpseclib3\Crypt\PublicKeyLoader;

class TboTechnologyController extends TboTechnologyHttp {
    protected $username;
    protected $password;
    protected $credentials;
    public function __construct(array $config = []) {        
        parent::__construct($config);
    }

    /**
     * @return mixed
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCredentials() {
        return $this->credentials;
    }

    /**
     * @param mixed $credentials
     */
    public function setCredentials($credentials) {
        $this->credentials = $credentials;
        return $this;
    }

    public function generateCredencial() {
        $this->credentials = base64_encode("{$this->username}:{$this->password}");
        return $this;
    }

}
