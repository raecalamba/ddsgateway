<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class User1Service{
    use ConsumesExternalService;
    /**
    * The base uri to consume the User1 Service
    * @var string
    */
    public $baseUri;

    /**
         * The secret to consume the User1 Service
         * @var string
         */

    public $secret;

    public function __construct()
    {
    $this->baseUri = config('services.users1.base_uri');
        $this->baseUri = config('services.users1.base_uri');
        $this->secret = config('services.users1.secret');
    }

    /**
    * Obtain the full list of Users from User2 Site
    * @return string
    */
 
    public function obtainUsers1()
    {
        return $this->performRequest('GET','/users'); 
    }
    /**
    * Create one user using the User2 service
    * @return string
    */
    public function createUser1($data)
    {
        return $this->performRequest('POST', '/users', $data);
    }
    /**
    * Obtain one single user from the User2 service