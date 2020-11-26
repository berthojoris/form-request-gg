<?php

use Carbon\Carbon;

if (!function_exists('timeAgo')) {
    function timeAgo($data)
    {
        return Carbon::createFromTimeStamp(strtotime($data))->diffForHumans();
    }
}
