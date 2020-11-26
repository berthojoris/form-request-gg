<?php

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

if (!function_exists('timeAgo')) {
    function timeAgo($data)
    {
        return Carbon::createFromTimeStamp(strtotime($data))->diffForHumans();
    }
}

if (!function_exists('getEnumDB')) {
    function getEnumDB($table, $column)
    {
        $type = DB::select(DB::raw("SHOW COLUMNS FROM $table WHERE Field = '{$column}'"))[0]->Type;
        $proses = preg_match('/^enum\((.*)\)$/', $type, $matches);
        $enum = [];
        foreach (explode(',', $matches[1]) as $value) {
            $v = trim($value, "'");
            $enum = Arr::add($enum, $v, $v);
        }
        return $enum;
    }
}

if (!function_exists('generateProjectID')) {
    function generateProjectID()
    {
        $now = "PID/" . date('Y') . "/DIGITAL/" . date('m') . date('d') . date('H') . date('m') . date('s');
        return $now;
    }
}
