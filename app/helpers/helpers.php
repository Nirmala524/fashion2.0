<?php

use App\Models\Settings;

if (! function_exists('setting')) {
    function setting() {
       $setting=Settings::find(1);
       return $setting;
    }
}