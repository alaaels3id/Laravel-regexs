<?php

namespace Alaaelsaid\LaravelRegexs\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @method static email(string $value)
 * @method static countryCode(string $value)
 * @method static arabic(string $value)
 * @method static english(string $value)
 * @method static youtube(string $value)
 * @method static latitude(string $value)
 * @method static longitude(string $value)
 * @method static password(string $value)
 * @method static noSpaces(string $value)
 * @method static iban(string $value)
 * @method static url(string $value)
 *
 * @see RegexProcess
 */

class Regex extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Regex';
    }
}
