<?php

namespace Farmers-friend\Classify\Commands;

use Illuminate\Console\Command;

class ClassifyCommand extends Command
{
    public $signature = 'classify';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
