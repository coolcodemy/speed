<?php

namespace CleaniqueCoders\Speed\Console\Commands;

use Illuminate\Console\Command;

class Serve extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'speed:serve {--port=8000}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Simple artisan command to speed up your application and serve the application';

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
        // speed up
        $this->call('speed:up');

        // and serve
        $this->call('serve',['--port' => $this->option('port')]);
    }
}
