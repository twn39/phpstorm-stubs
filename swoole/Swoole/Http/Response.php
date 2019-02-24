<?php

namespace Swoole\Http;

class Response
{
    /**
     * @param string $key
     * @param string $value
     * @param bool $ucwords
     */
    public function header(string $key, string $value, bool $ucwords = true) {}


    /**
     * @param string $key
     * @param string $value
     * @param int $expire
     * @param string $path
     * @param string $domain
     * @param bool $secure
     * @param bool $httponly
     */
    public function cookie(string $key, string $value = '', int $expire = 0 , string $path = '/', string $domain  = '', bool $secure = false , bool $httponly = false) {}

    /**
     * @param int $http_status_code
     */
    public function status(int $http_status_code) {}

    /**
     * @param string $url
     * @param int $http_code
     */
    public function redirect(string $url, int $http_code = 302) {}

    /**
     * @param string $data
     */
    public function write(string $data) {}

    /**
     * @param string $filename
     * @param int $offset
     * @param int $length
     */
    public function sendfile(string $filename, int $offset = 0, int $length = 0) {}

    /**
     * @param string $html
     */
    public function end(string $html = '') {}

    /**
     *
     */
    public function detach() {}

    /**
     * @param int $fd
     * @return Response
     */
    static function create(int $fd): Response {}
}
