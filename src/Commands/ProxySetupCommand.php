<?php

namespace Aindot\ProxySetup\Commands;

use Illuminate\Console\Command;

class ProxySetupCommand extends Command
{
    public $signature = 'proxy-setup';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
