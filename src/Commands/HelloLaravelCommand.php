<?php

namespace Pavons\HelloLaravel\Commands;

use Illuminate\Console\Command;

class HelloLaravelCommand extends Command
{
    public $signature = 'hello-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
