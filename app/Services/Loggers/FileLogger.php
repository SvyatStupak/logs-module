<?php

namespace App\Services\Loggers;

use App\Contracts\LoggerInterface;

class FileLogger implements LoggerInterface
{
    private string $type = 'file';

    public function send(string $message): void
    {
        file_put_contents(storage_path('logs/custom.log'), $message . PHP_EOL, FILE_APPEND);
    }

    public function sendByLogger(string $message, string $loggerType): void
    {
        $this->send($message);
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }
}
