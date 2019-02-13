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
    protected $signature = 'mindit {--l|loop}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'display random rajnikanth joke to user';


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


      $this->info($this->getJoke());

      $loopJoke = $this->option('loop');

      while ($loopJoke){
          if ($this->confirm('more?')) {
              $this->info($this->getJoke());
          } else{
              break;
          }
      }

    }

    /**
     * Get one random joke from file and return
     *
     * @return \Illuminate\Support\Collection|mixed
     */
    private function getJoke(){
        $jokesPath = __DIR__ ."/jokes.json";
        $jokes = collect(json_decode(file_get_contents($jokesPath), true));
        return $jokes->random();
    }
}