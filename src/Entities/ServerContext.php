<?php

namespace Gravatalonga\WatcherChecker\Entities;

use Gravatalonga\Hydrator\HydrableInterface;
use Gravatalonga\Hydrator\HydrateTrait;

class ServerContext implements HydrableInterface
{
    use HydrateTrait;

    public string $host;

    public string $user;

    public string $privateKey;

    public string $password;

    public bool $primary;
}