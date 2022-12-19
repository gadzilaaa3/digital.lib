<?php

namespace App\Requests;

use App\Facades\Http;

class Teachers
{
    public static function getForSelector()
    {
        $url = BASE_KPK . '/Teacheres';
        return Http::get($url);
    }
}