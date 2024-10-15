<?php

namespace SEVEN_TECH_THEME\Router;

class Router
{
    public function getURLArray($url)
    {
        $urlArray = explode('/', $url);
        $urlArray = array_filter($urlArray, function ($value) {
            return !empty($value) || is_array($value);
        });
        $urlArray = array_values($urlArray);

        return $urlArray;
    }
}
