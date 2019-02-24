<?php

namespace Swoole\Coroutine;

class MySQL
{
    /**
     * @param array $config
     */
    public function connect(array $config) {}

    /**
     * query a sql
     * @param string $sql
     * @param float $timeout
     */
    public function query(string $sql, float $timeout=-1) {}

    /**
     *
     * @param string $sql
     * @param float $timeout
     * @return bool
     */
    public function prepare(string $sql, float $timeout): bool {}
}
