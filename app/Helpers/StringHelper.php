<?php
namespace Mutant\String\App\Helpers;

class StringHelper
{
    /**
     * Removes all of a specified subset of characters
     * self::removeAll("abc", "the cat") => "the t"
     * @param string $chars
     * @param string $string
     * @return mixed
     */
    public static function removeAll(string $chars, string $string)
    {
        $pattern = "/[" . preg_quote($chars, "/") . "]/";
        $output = preg_replace($pattern, "", $string);
        return $output;
    }

    /**
     * Removes all EXCEPT a specified subset of characters
     * self::removeAllExcept("abc", "the cat") => "ca"
     * @param string $chars
     * @param string $string
     * @return mixed
     */
    public static function removeAllExcept(string $chars, string $string)
    {
        $pattern = "/[^" . preg_quote($chars, "/") . "]/";
        $output = preg_replace($pattern, "", $string);
        return $output;
    }

    /**
     * @param string $data
     * @return mixed
     */
    public static function stripAllButDigits(string $data)
    {
        return preg_replace("/[^0-9]/", "", $data);
    }

    /**
     * @param string $value
     * @return string
     */
    public static function lowercase(string $value)
    {
        return strtolower($value);
    }


    /**
     * @param string $value
     * @return string
     */
    public static function uppercase(string $value)
    {
        return strtoupper($value);
    }

    /**
     * Tests if an string is valid xml.
     * Interesting discussion on checking valid xml docs
     * https://stackoverflow.com/questions/4554233/how-check-if-a-string-is-a-valid-xml-with-out-displaying-a-warning-in-php
     * @param $xml
     * @return bool
     */
    public static function isValidXML($xml)
    {
        $doc = @simplexml_load_string($xml);
        if ($doc) {
            return true; //this is valid
        } else {
            return false; //this is not valid
        }
    }
}