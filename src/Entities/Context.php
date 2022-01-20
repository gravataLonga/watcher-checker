<?php

namespace Gravatalonga\WatcherChecker\Entities;

use Gravatalonga\Hydrator\HydrableInterface;
use Gravatalonga\Hydrator\HydrateTrait;
use Gravatalonga\Hydrator\Hydrator;

class Context implements HydrableInterface
{
    use HydrateTrait;

    public string $domain;

    public ServerContext $server;

    /** @var NotificationContext[] */
    public array $notifications;

    public function formatServer(array $value): ServerContext
    {
        /** @var ServerContext $hydrator */
        $hydrator = (new Hydrator($value))->hydrate(new ServerContext);

        return $hydrator;
    }

    public function formatNotifications(array $items): array
    {
        $notifications = [];

        foreach ($items as $item) {
            $notifications[] = (new Hydrator($item))
                ->hydrate(new NotificationContext);
        }

        return $notifications;
    }
}