<?php

namespace Alaaelsaid\LaravelRegexs\Facade;

class RegexProcess
{
    public function email($value)
    {
//        return preg_match('/^([a-zA-Z0-9_.]*)@.*\.com$/i', $value);
        return (bool)preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i', $value);
    }

    public function countryCode($value)
    {
        return (bool)preg_match('/^\d{2,4}$/', $value);
    }

    public function arabic($value)
    {
        return (bool)preg_match('/[اأإء-ي]/uim', $value);
    }

    public function english($value)
    {
        return self::setPattern('/(.*)/ims', $value);
    }

    public function youtube($value)
    {
        return (bool)preg_match('@^(?:https://(?:www\\.)?youtube.com/)(watch\\?v=|v/)([a-zA-Z0-9_]*)@', $value);
    }

    public function url($value)
    {
        return (bool)preg_match('/^http(s)?:\/\/[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(\/.*)?$/i', $value);
    }

    public function latitude($value)
    {
        return (bool)preg_match('/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/', $value);
    }

    public function longitude($value)
    {
        return (bool)preg_match('/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))\.(\d+))|180(\.0+)?)$/', $value);
    }

    public function password($value)
    {
        // password must contains char from a-z lowercase and numbers from 0-9
        return (bool)preg_match('/^.*(?=.{3,})(?=.*[a-z])(?=.*[0-9])(?=.*[\d\x]).*$/', $value, $matches);
    }

    public function noSpaces($value)
    {
        return (bool)preg_match('/^\S*$/u', $value);
    }

    public function iban($value)
    {
        return (bool)preg_match('/^\w{2}+\d{22}$/', $value,$matches);
    }

    private static function setPattern($pattern, $value)
    {
        return (bool)preg_match($pattern, $value,$matches, PREG_OFFSET_CAPTURE, 0);
    }
}
