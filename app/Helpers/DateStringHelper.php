<?php
namespace Mutant\String\App\Helpers;

class DateStringHelper
{
    /**
     * Get the 2-digit day from a date string. Strips all but numbers from the input param.
     * So only the numbers matter for formatting input and many formats will work: (MMMMYYDD, MMMM-YY-DD, MMMM\YY\DD, etc.)
     * @param string $value
     * @return bool|string
     */
    public static function dobDay(string $value)
    {
        $out = StringHelper::stripAllButDigits($value);
        return substr($out, 6, 2);
    }

    /**
     * Get the 2-digit month from a YYYYMMDD string. Strips all but numbers from the input param.
     * So only the numbers matter for formatting input and many formats will work: (MMMMYYDD, MMMM-YY-DD, MMMM\YY\DD, etc.)
     * @param string $value
     * @return bool|string
     */
    public function dobMonth(string $value)
    {
        $out = StringHelper::stripAllButDigits($value);
        return substr($out, 4, 2);
    }

    /**
     * Get the 4-digit year from a YYYYMMDD string. Strips all but numbers from the input param.
     * So only the numbers matter for formatting input and many formats will work: (MMMMYYDD, MMMM-YY-DD, MMMM\YY\DD, etc.)
     * @param string $value
     * @return bool|string
     */
    public function dobYear(string $value)
    {
        $out = StringHelper::stripAllButDigits($value);
        return substr($out, 0, 4);
    }
}