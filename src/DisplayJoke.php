<?php

namespace KumarRavi\Rajnikanth;

use Illuminate\Console\Command;

class DisplayJoke extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mindit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'display random rajnikanth joke to user';



    /**
     * Create a new command instance.
     *
     * @param  DripEmailer  $drip
     * @return void
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
        echo 'yenna raskala';
    }
}