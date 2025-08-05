<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Command\Command as CommandAlias;

class DBReset extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sessions = DB::table('sessions')->get()->map(function ($row) {
            return (array) $row;
        })->toArray();
        
        $this->info('Wiping database...');
        Artisan::call('db:wipe', ['--force' => true]);
        $this->output->writeln(Artisan::output());

        $this->info('Importing schema.sql...');
        $path = base_path('tests/schema.sql');

        if (!File::exists($path)) {
            $this->error("Schema file not found: $path");
            return CommandAlias::FAILURE;
        }

        $sql = File::get($path);
        DB::unprepared($sql);

        $this->info('✅ schema.sql executed successfully.');
        
        DB::table('sessions')->insert($sessions);
        $this->info('✅ sessions restored successfully.');
        
        return CommandAlias::SUCCESS;
    }
}
