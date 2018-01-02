<?php
namespace Mutant\String\App\Helpers;

class PhoneNumberStringHelper
{

    /**
     * Takes a phone number, strips all but numbers, and returns the prefix.
     * Most formats work: (3108675309, 310-867-5309, (310)-867-5309)
     * @param string $value
     * @return string
     */
    public static function phonePrefix(string $value)
    {
        $out = StringHelper::stripAllButDigits($value);
        return substr($out, 3, 3);
    }

    /**
     * Takes a phone number, strips all but numbers, and returns the last four digits of a phone number.
     * Most formats work: (3108675309, 310-867-5309, (310)-867-5309)
     * @param string $value
     * @return string
     */
    public static function phoneSuffix(string $value)
    {
        $out = StringHelper::stripAllButDigits($value);
        return substr($out, 6, 4);
    }
    /**
     * Takes a phone number, strips all but numbers, and returns the area code
     * Most formats work: (3108675309, 310-867-5309, (310)-867-5309)
     * @param string $value
     * @return string
     */
    public static function phoneAreaCode(string $value)
    {
        $out = StringHelper::stripAllButDigits($value);
        return substr($out, 0, 3);
    }
}