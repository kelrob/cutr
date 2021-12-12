<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('user')) {
    function user($column)
    {
        return Auth::user()->$column;
    }
}

if (!function_exists('remove_underscores')) {
    function remove_underscores($string)
    {
        $new_string = str_replace('_', ' ', $string);

        return ucwords($new_string);
    }
}
