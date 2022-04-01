<?php
/**
 * Created by PhpStorm.
 * User: ljvt
 * Date: 01/04/22
 * Time: 09:32
 */

namespace LojaVirtual\Jadlog\Resource;

use LojaVirtual\Jadlog\RequestHandler;

class Frete extends AbstractResource implements ResourceInterface
{
    const ENDPOINT = 'frete/valor';
    public function calculate(array $payload)
    {
        try{
            return $this
                ->http_client
                ->request(
                    "POST",
                    self::ENDPOINT,
                    array(
                        "json" => $payload
                    )
                );
        } catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }
} 