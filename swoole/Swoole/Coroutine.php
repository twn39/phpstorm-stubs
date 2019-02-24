<?php

namespace Swoole;

class Coroutine
{
    public function create(callable $fun) {}

    public function getCid(): int {}

    public function sleep(float $seconds) {}

    public function yield() {}

    public function resume(int $coroutineId) {}

    public function readFile(string $filename) {}
}
