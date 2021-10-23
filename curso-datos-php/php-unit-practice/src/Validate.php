<?php
namespace App;

Class Validate
{
    public static function email($value)
    {
        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function url($value)
    {
        return (bool) filter_var($value, FILTER_VALIDATE_URL);
    }

    public static function password($value)
    {
        return (bool) filter_var($value, FILTER_VALIDATE_REGEXP,
    array("options" => array("regexp" => "/^[0-9]{6,9}$/")));
    }
}