<?php
/**
 * Created by PhpStorm.
 * User: ljvt
 * Date: 01/04/22
 * Time: 09:41
 */

namespace LojaVirtual\Jadlog\Tests;

use LojaVirtual\Jadlog\Jadlog;

class JadlogTest extends BaseTesting
{
    public function testInstanceOf()
    {
        $jadlog = new Jadlog('token');
        $this->assertInstanceOf('LojaVirtual\Jadlog\Jadlog', $jadlog);
    }

    public function testFrete()
    {
        $jadlog = new Jadlog('token');
        $this->assertInstanceOf('LojaVirtual\Jadlog\Resource\Frete', $jadlog->frete());
    }

    public function testGetToken()
    {
        $token = 'token';
        $jadlog = new Jadlog($token);
        $this->assertEquals($token, $jadlog->getToken());
    }
} 