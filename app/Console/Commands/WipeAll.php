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
  protected $signature = 'db:clear';
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
  public function handle() {
    Artisan::call("db:wipe --drop-views --force");
    Artisan::call("db:wipe --database=db_auth --drop-views --force");
    Artisan::call("db:wipe --database=db_device --drop-views --force");
    Artisan::call("db:wipe --database=db_media --drop-views --force");
    Artisan::call("db:wipe --database=db_crm --drop-views --force");
    Artisan::call("db:wipe --database=db_staff --drop-views --force");
  }
}
