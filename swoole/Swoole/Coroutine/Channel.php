<?php
/**
 * Created by PhpStorm.
 * User: weinan
 * Date: 2019/2/24
 * Time: 21:22
 */

namespace Swoole\Coroutine;

class Channel
{
    public $capacity;

    public $errCode;

    public function __construct(int $size) {}

    public function push($data, float $timeout = -1) {}

    public function pop(float $timeout=0) {}

    public function stats(): array {}

    public function close() {}

    public function length(): int {}

    public function isEmpty(): bool {}

    public function isFull(): bool {}



}