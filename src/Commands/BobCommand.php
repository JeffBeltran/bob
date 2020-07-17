<?php

namespace Jeffbeltran\Bob\Commands;

use Illuminate\Console\Command;

class BobCommand extends Command
{
    public $signature = 'bob';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
