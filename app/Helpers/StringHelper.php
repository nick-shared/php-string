<?php
namespace App\Helpers;

use GuzzleHttp\Pool;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Promise;


class StringHelper
{
    /**
     * Removes all of a specified subset of characters
     * @param $chars
     * @param $string
     * @return mixed
     */
    public function removeAll($chars, $string)
    {
        $pattern = "/[" . preg_quote($chars, "/") . "]/";
        $output = preg_replace($pattern, "", $string);
        return $output;
    }

    /**
     * Removes all EXCEPT a specified subset of characters
     * @param $chars
     * @param $string
     * @return mixed
     */
    public function removeAllExcept($chars, $string)
    {
        $pattern = "/[^" . preg_quote($chars, "/") . "]/";
        $output = preg_replace($pattern, "", $string);
        return $output;
    }
}