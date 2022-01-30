<?php

namespace Gravatalonga\WatcherChecker;

use Gravatalonga\WatcherChecker\Entities\ConfigurationContext;
use Gravatalonga\WatcherChecker\Entities\Context;

interface HandlerJob
{
    public function handle(ConfigurationContext $config, Context $context): ResponseStatus;
}