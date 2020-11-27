<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Fideloper\Proxy\TrustProxies as Middleware;
use Closure;
// use Illuminate\Http\Request;
use Illuminate\Contracts\Config\Repository;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var string|array
     */
    protected $proxies = [
        "127.0.0.1"
        // '127.0.0.1.0',
        // '127.0.0.1.2',
        // '127.0.0.1.3',
        // '192.168.1.1',
        // '192.168.1.2',
    ];

    // protected $proxies = [
    //     '*'
    // ];

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_ALL;
}