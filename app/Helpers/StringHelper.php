<?php
namespace Mutant\String\App\Helpers;

class StringHelper
{
    /**
     * Removes all of a specified subset of characters
     * self::removeAll("abc", "the cat") => "the t"
     * @param $chars
     * @param $string
     * @return mixed
     */
    public static function removeAll($chars, $string)
    {
        $pattern = "/[" . preg_quote($chars, "/") . "]/";
        $output = preg_replace($pattern, "", $string);
        return $output;
    }

    /**
     * Removes all EXCEPT a specified subset of characters
     * self::removeAllExcept("abc", "the cat") => "ca"
     * @param $chars
     * @param $string
     * @return mixed
     */
    public static function removeAllExcept($chars, $string)
    {
        $pattern = "/[^" . preg_quote($chars, "/") . "]/";
        $output = preg_replace($pattern, "", $string);
        return $output;
    }

    /**
     * The name is pretty self-explanatory
     * @param $data
     * @return mixed
     */
    public static function stripAllButDigits($data)
    {
        return preg_replace("/[^0-9]/", "", $data);
    }

    /**
     * Change to lower case
     * @param $value
     * @param null $params
     * @return string
     */
    public static function lowercase($value, $params = null)
    {
        return strtolower($value);
    }


    /**
     * Capitalize the ENTIRE STRING TO CAPS
     * @param $value
     * @param null $params
     * @return string
     */
    public static function uppercase($value, $params = null)
    {
        return strtoupper($value);
    }
}