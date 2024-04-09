<?php

namespace SimonSchaufi\GithubAutomergeTest\Commands;

use Illuminate\Console\Command;

class GithubAutomergeTestCommand extends Command
{
    public $signature = 'github-automerge-test';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
