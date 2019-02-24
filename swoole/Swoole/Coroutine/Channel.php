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

    /**
     * Channel constructor.
     * @param int $size
     */
    public function __construct(int $size) {}

    /**
     * push data to channel
     * @param $data
     * @param float $timeout
     */
    public function push($data, float $timeout = -1) {}

    /**
     * pop data from a channel
     * @param float $timeout
     * @return mixed
     */
    public function pop(float $timeout=0): mixed {}

    /**
     * get stats of channel
     * @return array
     */
    public function stats(): array {}

    /**
     * close the channel
     */
    public function close() {}

    /**
     * get length of a channel
     * @return int
     */
    public function length(): int {}

    /**
     * check empty
     * @return bool
     */
    public function isEmpty(): bool {}

    /**
     * check full
     * @return bool
     */
    public function isFull(): bool {}



}