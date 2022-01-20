<?php

namespace Gravatalonga\WatcherChecker;

class Status
{
    private bool $status;

    private string $subject;

    private string $message;

    public function __construct(bool $status, string $subject, string $message)
    {
        $this->status = $status;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function success(): bool
    {
        return $this->status;
    }

    public function subject(): string
    {
        return $this->subject;
    }

    public function message(): string
    {
        return $this->message;
    }
}