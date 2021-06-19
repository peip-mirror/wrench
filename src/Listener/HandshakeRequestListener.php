<?php

namespace Wrench\Listener;

use Wrench\Connection;

interface HandshakeRequestListener
{
    /**
     * Handshake request listener.
     *
     * @param Connection $connection
     * @param string     $path
     * @param string     $origin
     * @param string     $key
     * @param array      $extensions
     */
    public function onHandshakeRequest(
        Connection $connection,
        string $path,
        string $origin,
        string $key,
        array $extensions
    );
}
