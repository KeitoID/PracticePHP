<?php

namespace Messager;

class Messager
{
    private readonly string $message;

    public function __construct(string $message)
    {
        if (strlen($message) > 255) {
            throw new \InvalidArgumentException('Message is too long');
        }

        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function concatinatePre(string $prefix)
    {
        return $prefix . $this->message;
    }
}