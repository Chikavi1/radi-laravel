<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Losts;


class lostreports extends Command
{

    protected $signature = 'lostreport:status';

    protected $description = 'Command for change status in lost reports';

    public function handle()
    {
        $lost = Losts::where('status',1)->where('createdAt', '<=', Carbon::now()->subDays(7)->toDateTimeString());
        if(count($lost->get()) != 0){
            $lost->update(['status' => 0]);
        }

    }
}
