<?php

namespace Gravatalonga\WatcherChecker;

use Gravatalonga\WatcherChecker\Entities\Context;

interface HandlerJob
{
    public function handle(array $config, Context $context): ResponseStatus;
}