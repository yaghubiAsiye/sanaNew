<?php
// namespace App\Services;

if (!function_exists('traverse_farsi')) {
    /**
     * @param $str
     * @return mixed
     */
    function traverse_farsi($str)
    {
        $farsi_chars = ['٠', '١', '۲', '٣', '۴', '۵', '۶', '٧', '٨', '٩'];
        $latin_chars = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        return str_replace($latin_chars, $farsi_chars, $str);
    }
}
