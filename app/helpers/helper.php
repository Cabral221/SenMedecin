<?php
use App\Models\Info;

if(! function_exists('all_info')){
    function all_info() : ?Info
    {
        $info = Info::first();
        return $info;
    }
}
