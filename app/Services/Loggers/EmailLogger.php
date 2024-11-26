<?php

namespace App\Services\Loggers;

use App\Contracts\LoggerInterface;

class EmailLogger implements LoggerInterface
{
    private string $type = 'email';

    public function send(string $message): void
    {
        echo "Email log: $message\n";
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
