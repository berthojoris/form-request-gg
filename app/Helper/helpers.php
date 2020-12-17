<?php

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

if (!function_exists('timeAgo')) {
    function timeAgo($data)
    {
        return Carbon::createFromTimeStamp(strtotime($data))->diffForHumans();
    }
}

if (!function_exists('indonesianDate')) {
    function indonesianDate($data)
    {
        return Carbon::parse($data)->format('Y-m-d');
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
        $now = "PID-GG/" . date('Y') . "/DIGITAL/" . date('m') . date('d') . date('H') . date('m') . date('s');
        return $now;
    }
}

if (!function_exists('uploadFile')) {
    function uploadFile($file)
    {
        if (empty($file)) {
            return 'empty.jpg';
        } else {
            $newFileName = Str::random(10) . "." . $file->getClientOriginalExtension();
            $destination = 'uploads';
            $file->move($destination, $newFileName);
            return $newFileName;
        }
    }
}

if (!function_exists('jsonOutput')) {
    function jsonOutput($msg = null, $payload = null, $httpCode = 200)
    {
        return response()->json([
            'msg' => $msg,
            'data' => $payload,
        ], $httpCode);
    }
}

if (!function_exists('myid')) {
    function myid()
    {
        return auth()->user()->id;
    }
}