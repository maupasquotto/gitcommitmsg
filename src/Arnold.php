<?php

namespace Maupasquotto\GitCommitMsg;

use Illuminate\Console\Command;

class Arnold extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gitcommitmsg:arnold';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'They say breakfast is the most important meal of the day.';

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

            /* choose a quote from 0 to 100 */
            $intRnd = random_int(0, 100) ;
            $msg = file_get_contents('https://arnold-quotes-api.herokuapp.com/api/quote/'.$intRnd);
            $msg = json_decode($msg);
            /* Display it with the movie name */
            $this->info($msg->quote . PHP_EOL . '- ' . $msg->movie);

        } catch (\Exception $e) {
            /* Any errors ? */
            $this->info(' I couldn\'t get any msg :(');
        }
    }
}