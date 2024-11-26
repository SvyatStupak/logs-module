<?php

namespace App\Services;

use App\Contracts\LoggerInterface;
use App\Factories\LoggerFactory;

class LoggerService implements LoggerInterface
{
    protected LoggerInterface $logger;

    public function __construct()
    {
        $defaultType = config('logger.default');
        $this->logger = LoggerFactory::createLogger($defaultType);
    }

    public function setType(string $type): void
    {
        $this->logger = LoggerFactory::createLogger($type);
    }

    public function getType(): string
    {
        return $this->logger->getType();
    }

    public function send(string $message): void
    {
        $this->logger->send($message);
    }

    public function sendByLogger(string $message, string $loggerType): void
    {
        $logger = LoggerFactory::createLogger($loggerType);
        $logger->send($message);
    }

    public function logToAll(string $message): void
    {
        $types = config('logger.types');

        foreach ($types as $type) {
            $logger = LoggerFactory::createLogger($type);
            $logger->send($message);
        }
    }
}
