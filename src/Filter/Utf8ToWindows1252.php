<?php

namespace MarcusJaschen\Collmex\Filter;

use ForceUTF8\Encoding;

/**
 * Filter to convert UTF-8 to Windows 1252 encoding
 *
 * @author   Marcus Jaschen <mail@marcusjaschen.de>
 * @license  http://www.opensource.org/licenses/mit-license MIT License
 * @link     https://github.com/mjaschen/collmex
 */
class Utf8ToWindows1252 implements FilterInterface
{
    /**
     * @param string $input string or array
     *
     * @return string
     */
    public function filter(string $input): string
    {
        return Encoding::toWin1252($input);
    }

    /**
     * @param string $text
     *
     * @return string
     */
    public function filterString(string $text): string
    {
        return Encoding::toWin1252($text);
    }

    /**
     * @param array $input
     *
     * @return array
     */
    public function filterArray(array $input): array
    {
        return (array)Encoding::toWin1252($input);
    }
}
