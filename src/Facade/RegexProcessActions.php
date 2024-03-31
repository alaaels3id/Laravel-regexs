<?php

namespace Alaaelsaid\LaravelRegexs\Facade;

class RegexProcessActions
{
    public function email($value): bool|int
    {
//        return preg_match('/^([a-zA-Z0-9_.]*)@.*\.com$/i', $value);
        return preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $value);
    }

    public function countryCode($value): bool|int
    {
        return preg_match('/^\d{2,4}$/', $value);
    }

    public function arabic($value): bool|int
    {
        return preg_match('/[اأإء-ي]/uim', $value);
    }

    public function english($value): bool|int
    {
        return self::setPattern('/(.*)/ims', $value);
    }

    public function youtube($value): bool|int
    {
        return preg_match('@^(?:https://(?:www\\.)?youtube.com/)(watch\\?v=|v/)([a-zA-Z0-9_]*)@', $value);
    }

    public function url($value): bool|int
    {
        return preg_match('/^http(s)?:\/\/[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(\/.*)?$/i', $value);
    }

    public function latitude($value): bool|int
    {
        return preg_match('/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/', $value);
    }

    public function longitude($value): bool|int
    {
        return preg_match('/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/', $value);
    }

    public function password($value): bool|int
    {
        // password must contain char from a-z lowercase and numbers from 0-9
        return preg_match('/^.*(?=.{3,})(?=.*[a-z])(?=.*[0-9])(?=.*[\d\x]).*$/', $value, $matches);
    }

    public function noSpaces($value): bool|int
    {
        return preg_match('/^\S*$/u', $value);
    }

    public function iban($value): bool|int
    {
        return preg_match('/^\w{2}+\d{22}$/', $value,$matches);
    }

    private static function setPattern($pattern, $value): bool|int
    {
        return preg_match($pattern, $value,$matches, PREG_OFFSET_CAPTURE, 0);
    }
}
