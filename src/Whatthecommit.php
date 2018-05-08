<?php

namespace Maupasquotto\GitCommitMsg;

use Illuminate\Console\Command;

class Whatthecommit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gitcommitmsg:rnd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get a new commit message for your awesome push!';

    /**
     * Create a new command instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            /* Get a new msg from whatthecommit */
            $msg = file_get_contents('http://whatthecommit.com/index.txt');
            /* Display it */
            $this->info($msg);

        } catch (\Exception $e) {
            /* Any error ? */
            $this->info(' I couldn\'t get any msg :(');
        }
    }
}