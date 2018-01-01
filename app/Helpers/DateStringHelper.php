<?php
namespace Mutant\String\App\Helpers;

class DateStringHelper
{
    /**
     * Get the 2-digit day from a date string
     * Only the numbers matter for formatting input and many formats will work: (MMMMYYDD, MMMM-YY-DD, MMMM\YY\DD, etc.)
     * @param $value
     * @param null $params
     * @return bool|string
     */
    public static function dobDay($value)
    {
        $out = StringHelper::stripAllButDigits($value);
        return substr($out, 6, 2);
    }

    /**
     * Get the 2-digit month from a YYYYMMDD string
     * Only the numbers matter for formatting input and many formats will work: (MMMMYYDD, MMMM-YY-DD, MMMM\YY\DD, etc.)
     * @param $value
     * @param null $params
     * @return bool|string
     */
    public function dobMonth($value)
    {
        $out = StringHelper::stripAllButDigits($value);
        return substr($out, 4, 2);
    }

    /**
     * Get the 4-digit year from a YYYYMMDD string
     * Only the numbers matter for formatting input and many formats will work: (MMMMYYDD, MMMM-YY-DD, MMMM\YY\DD, etc.)
     * @param $value
     * @param null $params
     * @return bool|string
     */
    public function dobYear($value)
    {
        $out = StringHelper::stripAllButDigits($value);
        return substr($out, 0, 4);
    }
}