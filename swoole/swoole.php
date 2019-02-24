<?php

/**
 * run a coroutine
 * @param Closure $fun
 */
function go(\Closure $fun) {}

class swoole_http_server {
    /**
     * swoole_http_server constructor.
     * @param string $host
     * @param int $port
     * @param int $mode
     * @param int $sock_type
     */
    public function __construct($host='127.0.0.1', $port=8080, int $mode=SWOOLE_PROCESS, int $sock_type = SWOOLE_SOCK_TCP) {}

    /**
     * @param $event
     * @param callable $fun
     */
    public function on($event, callable $fun) {}

    public function start() {}
}

class swoole_server {
    /**
     * swoole_server constructor.
     * @param string $host
     * @param int $port
     */
    public function __construct($host='127.0.0.1', $port=8080) {}

    /**
     * @param $event
     * @param callable $fun
     */
    public function on($event, callable $fun) {}

    public function start() {}
}

class swoole_websocket_server {
    /**
     * swoole_websocket_server constructor.
     * @param string $host
     * @param int $port
     */
    public function __construct($host='127.0.0.1', $port=8080) {}

    /**
     * @param $event
     * @param callable $fun
     */
    public function on($event, callable $fun) {}

    public function start() {}
}