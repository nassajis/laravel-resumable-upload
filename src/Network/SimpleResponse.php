<?php
namespace Dilab\Network;

use Dilab\Network\Response;

class SimpleResponse implements Response
{
    /**
     * @param $statusCode
     * @return mixed
     */
    public function header($statusCode)
    {
        if (200==$statusCode) {
            header("HTTP/1.0 200 Ok");
            return 200;
        } else if (201==$statusCode) {
            header("HTTP/1.0 201 Accepted");
            return 201; // upload complete
        } else if (204==$statusCode) {
            header("HTTP/1.0 204 No Content");
            return 204; // chunk not found
        } else if (404==$statusCode) {
            header("HTTP/1.0 404 Not Found");
            return 404;
        }
        header("HTTP/1.0 404 Not Found");
        return 404;
    }
}
