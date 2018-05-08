<?php

namespace Maupasquotto\GitCommitMsg;

use Illuminate\Support\ServiceProvider;

class GitCommitMsgServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        /* Register cmd */
        if ($this->app->runningInConsole()) {
            $this->commands([
                Whatthecommit::class, // Any random msg from whatthecommit
                Arnold::class // Quotes from Arnold
            ]);
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}