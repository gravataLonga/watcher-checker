<?php

namespace Gravatalonga\WatcherChecker\Entities;

use Gravatalonga\Hydrator\HydrableInterface;
use Gravatalonga\Hydrator\HydrateTrait;

class ConfigurationContext implements HydrableInterface
{
    use HydrateTrait;

    public string $type;

    public string $name;

    public int $level;

    public array $config;

    public string $success;

    public array $notify;


}