<?php


namespace Swoole\Http;

class Request
{
    public $header = [];

    public $server = [];

    public $get = [];

    public $post = [];

    public $cookie = [];

    public $files = [];

    public function rawContent() {}

    public function getData(): string {}
}
