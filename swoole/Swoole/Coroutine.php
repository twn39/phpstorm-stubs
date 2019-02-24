<?php

namespace Swoole;

class Coroutine
{
    /**
     * create a coroutine
     * @param callable $fun
     */
    public function create(callable $fun) {}

    /**
     * get a coroutine id
     * @return int
     */
    public function getCid(): int {}

    /**
     * @param float $seconds
     */
    public function sleep(float $seconds) {}

    /**
     *
     */
    public function yield() {}

    /**
     * @param int $coroutineId
     */
    public function resume(int $coroutineId) {}

    /**
     * @param string $filename
     */
    public function readFile(string $filename) {}
}
