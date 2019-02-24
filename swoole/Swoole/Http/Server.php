<?php

namespace Swoole\Http;

class Server {

    public $setting;

    public $host;

    public $port;

    /**
     * Server constructor.
     * @param string $host
     * @param int $port
     * @param int $mode
     * @param int $sock_type
     */
    public function __construct($host='127.0.0.1', $port=8080, int $mode=SWOOLE_PROCESS, int $sock_type = SWOOLE_SOCK_TCP) {}

    /**
     * set config
     * @param array $config
     */
    public function set(array $config) {}

    /**
     * @param string $event
     * @param \Closure $callback
     */
    public function on($event='request', \Closure $callback) {}

    /**
     * start the server
     */
    public function start() {}

    /**
     * @param string $host
     * @param int $port
     * @param int $type
     */
    public function listen(string $host, int $port, int $type) {}

    /**
     * @param bool $only_reload_taskworkrer
     */
    public function reload(bool $only_reload_taskworkrer = false) {}

    /**
     * stop the server
     * @param int $worker_id
     * @param bool $waitEvent
     */
    public function stop(int $worker_id = -1, bool $waitEvent = false) {}

    /**
     *  shutdown the server
     */
    public function shutdown() {}

    /**
     * close the server
     * @param int $fd
     * @param bool $reset
     */
    public function close(int $fd, bool $reset = false) {}


    /**
     * @param $fd
     * @param string $data
     * @param int $serverSocket
     */
    public function send($fd, string $data, int $serverSocket = -1) {}

    /**
     * run a async task
     * @param $data
     * @param int $dst_worker_id
     */
    public function task($data, int $dst_worker_id = -1) {}
}

