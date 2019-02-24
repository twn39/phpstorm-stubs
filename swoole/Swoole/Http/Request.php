<?php


namespace Swoole\Http;

class Request
{
    public $header;
    public $server;
    public $get;
    public $post;
    public $cookie;
    public $files;

    /**
     * get raw content
     */
    public function rawContent() {}

    /**
     * @return string Get request data
     */
    public function getData(): string {}
}
