<?php

if (!function_exists('array_verify_key')){
    function array_verify_key($key, array $array) : bool{
        if (!array_key_exists($key, $array)){
            throw new \ValueError("Invalid array key, $key must exist in array");
        }
        return true;
    }
}
