<?php

namespace Swoole\Http;

class Server {

    public $setting;

    public function __construct($host='127.0.0.1', $port=8080, int $mode=SWOOLE_PROCESS, int $sock_type = SWOOLE_SOCK_TCP) {}

    public function set(array $config) {}

    public function on($event='request', \Closure $callback) {}

    public function start() {}

    public function listen(string $host, int $port, int $type) {}

    public function reload(bool $only_reload_taskworkrer = false) {}

    public function stop(int $worker_id = -1, bool $waitEvent = false) {}

    public function shutdown() {}

    public function close(int $fd, bool $reset = false) {}


    public function send($fd, string $data, int $serverSocket = -1) {}

    public function task($data, int $dst_worker_id = -1) {}
}

