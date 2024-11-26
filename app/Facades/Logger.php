<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Contracts\LoggerInterface;

class Logger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return LoggerInterface::class;
    }
}
