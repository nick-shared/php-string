<?php
namespace Mutant\String\App\Helpers;

class PhoneNumberStringHelper
{

    /**
     * Takes a phone number and returns the prefix.
     * Most formats work: (3108675309, 310-867-5309, (310)-867-5309)
     * @param $value
     * @return string
     */
    public static function phonePrefix($value)
    {
        $out = StringHelper::stripAllButDigits($value);
        return substr($out, 3, 3);
    }

    /**
     * Takes a phone number and returns the last four digits of a phone number.
     * Most formats work: (3108675309, 310-867-5309, (310)-867-5309)
     * @param $value
     * @return string
     */
    public static function phoneSuffix($value)
    {
        $out = StringHelper::stripAllButDigits($value);
        return substr($out, 6, 4);
    }
    /**
     * Takes a phone number and returns the first three digits of a phone number
     * Most formats work: (3108675309, 310-867-5309, (310)-867-5309)
     * @param $value
     * @return string
     */
    public static function phoneAreaCode($value)
    {
        $out = StringHelper::stripAllButDigits($value);
        return substr($out, 0, 3);
    }
}