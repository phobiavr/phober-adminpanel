<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class WipeAll extends Command {
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'db:clear {--seed}';
  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Command description';

  /**
   * Create a new command instance.
   *
   * @return void
   */
  public function __construct() {
    parent::__construct();
  }

  /**
   * Execute the console command.
   *
   * @return void
   */
  public function handle() {;
    $this->callDbWipe();
    $this->callDbWipe('db_auth');
    $this->callDbWipe('db_device');
    $this->callDbWipe('db_media');
    $this->callDbWipe('db_crm');
    $this->callDbWipe('db_staff');
    $this->callDbWipe('db_config');
    $this->callDbWipe('db_shared');
    $this->callDbWipe('db_notification');

    if ($this->option('seed')) {
      $this->callMigrateFreshSeed();
    }
  }

  protected function callDbWipe($database = null)
  {
    if (!$database) {
      $this->info("Wiping Default database");
      Artisan::call("db:wipe --drop-views --force");
    } else {
      $this->info("Wiping database: $database");
      Artisan::call("db:wipe --database=$database --drop-views --force");
    }
    //$this->output->write(Artisan::output());
  }

  protected function callMigrateFreshSeed()
  {
    $this->info("Running migrate:fresh --seed");
    Artisan::call("migrate:fresh --seed");
    //$this->output->write(Artisan::output());
  }
}
