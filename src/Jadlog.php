<?php
/**
 * Created by PhpStorm.
 * User: ljvt
 * Date: 01/04/22
 * Time: 09:19
 */

namespace LojaVirtual\Jadlog;

use LojaVirtual\Jadlog\Resource\Frete;

/**
 * Class Jadlog
 * Classe que chama as outras classes
 * @package LojaVirtual\Jadlog
 */

class Jadlog
{
    const BASE_URI = 'https://www.jadlog.com.br/embarcador/api/';
    private $token;
    private $frete;

    public function __construct($token)
    {
        $this->token = $token;
        $this->frete = new Frete($this->getToken());
    }

    public function getToken()
    {
        return $this->token;
    }

    public function frete()
    {
        return $this->frete;
    }
} 