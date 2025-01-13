<?php

if (!function_exists('language_switch_url')) {
    function language_switch_url($locale)
    {
        $segments = request()->segments();
        $currentLocale = app()->getLocale();
        
        if ($locale === 'cs') {
            // Pro češtinu odstraníme prefix jazyka
            if ($currentLocale === 'en' && count($segments) > 0) {
                array_shift($segments);
            }
            return url(implode('/', $segments));
        } else {
            // Pro angličtinu přidáme prefix 'en'
            if ($currentLocale === 'cs') {
                array_unshift($segments, 'en');
            } else if (count($segments) > 0) {
                $segments[0] = 'en';
            } else {
                $segments = ['en'];
            }
            return url(implode('/', $segments));
        }
    }
} 