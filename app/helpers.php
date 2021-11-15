<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('user')) {
    function user($column)
    {
        return Auth::user()->$column;
    }
}
