<?php

namespace CleaniqueCoders\Speed\Console\Commands;

use Illuminate\Console\Command;

class Speed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'speed:up';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Simple artisan command to speed up your application';

    /**
     * Create a new command instance.
     *
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
        // clean up cache 
        $this->call('view:clear');
        $this->call('cache:clear');
        $this->call('route:clear');

        // regenerate cache
        $this->call('config:cache');
        // $this->call('route:cache');

        // do optimization
        $this->call('optimize');
    }
}
