<?php

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Illuminate\Console\Command;

class PhpUnit extends Command {
    protected $signature = 'test';
    protected $description = 'Run all phpunit tests.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    public function handle() {
        $process = new Process(['vendor/bin/phpunit', '']);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        echo $process->getOutput();
    }
}