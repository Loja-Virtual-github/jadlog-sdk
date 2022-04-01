<?php
/**
 * Created by PhpStorm.
 * User: ljvt
 * Date: 01/04/22
 * Time: 10:24
 */

namespace LojaVirtual\Jadlog\Tests;
use LojaVirtual\Jadlog\Jadlog;

class FreteTest extends BaseTesting
{
    public function testFrete()
    {
        $jadlog = new Jadlog('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJqdGkiOjExNTA3NywiZHQiOiIyMDIyMDMxNiJ9.bpOseTLg9wNFZcUOn_xRFXoF5aM7IimBdWGzqXW89Uc');

        $frete = array(
            "frete" => [
                array (
                    "cepori" => "31585380",
                    "cepdes" => "17213580",
                    "frap" => null,
                    "peso" => 13.78,
                    "cnpj" => "12345678901234",
                    "conta" => "000001",
                    "contrato" => 123,
                    "modalidade" => 3,
                    "tpentrega" => "D",
                    "tpseguro" => "N",
                    "vldeclarado" => 149.97,
                    "vlcoleta" => null
                )
            ]
        );

        $resposta = $jadlog->frete()->calculate($frete);
        $this->assertEquals(200, $resposta->getStatusCode());

        $dataBody = json_decode($resposta->getBody()->getContents());
        $this->assertEmpty(json_last_error());

    }
} 