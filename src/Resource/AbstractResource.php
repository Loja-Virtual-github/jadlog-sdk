<?php
/**
 * Created by PhpStorm.
 * User: ljvt
 * Date: 01/04/22
 * Time: 09:29
 */

namespace LojaVirtual\Jadlog\Resource;

use GuzzleHttp\Client;
use LojaVirtual\Jadlog\Jadlog;

/**
 * Class AbstractResource
 * Herança de todas as classes.
 * @package LojaVirtual\Jadlog\Resource
 */

class AbstractResource
{
    protected $http_client;
    protected $token;

    public function __construct($token)
    {
        $this->token = $token;
        $this->http_client = new Client([
            "base_uri" => Jadlog::BASE_URI,
            "headers" => array(
                "Authorization" => sprintf("Bearer %s", $token),
                "Content-Type" => "application/json"
            )
        ]);
    }

    public function getToken()
    {
        return $this->token;
    }
} 