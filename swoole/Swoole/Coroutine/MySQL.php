<?php

namespace Swoole\Coroutine;

class MySQL
{
    public function connect(array $config) {}

    public function query(string $sql, float $timeout=-1) {}

    public function prepare(string $sql, float $timeout): bool {}
}
