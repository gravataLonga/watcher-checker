<?php

namespace Gravatalonga\WatcherChecker\Entities;

use Gravatalonga\Hydrator\HydrableInterface;
use Gravatalonga\Hydrator\HydrateTrait;

class NotificationContext implements HydrableInterface
{
    use HydrateTrait;

    public string $type;

    public string $service;

    public string $username;

    public string $password;

    public string $from;

    public string $to;
}