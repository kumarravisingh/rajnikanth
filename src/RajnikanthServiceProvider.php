<?php

namespace KumarRavi\Rajnikanth;

use Carbon\Laravel\ServiceProvider;

class RajnikanthServiceProvide extends ServiceProvider
{
    public function boot(){

    }

    public function register()
    {
        $this->commands([
            DisplayJoke::class
        ]);
    }
}