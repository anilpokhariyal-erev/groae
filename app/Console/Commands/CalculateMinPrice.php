<?php

namespace App\Console\Commands;

use App\Assets\Helper;
use Illuminate\Console\Command;

class CalculateMinPrice extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'min:cal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate freezones minimum price';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $freezones = \App\Models\Freezone::get();
        foreach ($freezones as $freezone) {
            Helper::calculateMinPriceByFreezoneID($freezone->id);
        }
        $this->info('Minimun price of all the freezones has been updated.');
    }
}
