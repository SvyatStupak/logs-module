<?php

namespace App\Factories;

use App\Contracts\LoggerInterface;
use App\Services\Loggers\EmailLogger;
use App\Services\Loggers\FileLogger;
use App\Services\Loggers\DatabaseLogger;

class LoggerFactory
{
    public static function createLogger(string $type): LoggerInterface
    {
        return match ($type) {
            'email' => new EmailLogger(),
            'file' => new FileLogger(),
            'database' => new DatabaseLogger(),
            default => throw new \InvalidArgumentException("Unknown logger type: $type"),
        };
    }
}
