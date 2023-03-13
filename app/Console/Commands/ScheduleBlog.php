<?php

namespace App\Console\Commands;

use App\Models\Schedule;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ScheduleBlog extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule:blog';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scheduling blog';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        
         $schedules = collect(Schedule::where('status', '=', 'active')->get());
         $currentTime = now()->format('Y-m-d H:i:s');
         foreach ($schedules as $schedule) {
            
            if ($currentTime == $schedule->set_date) {
                Schedule::where('id', '=', $schedule->id)->where('set_date', '=', $schedule->set_date)->update([
                   'blog_id' => $schedule->blog_id,
                   'set_date' => $schedule->set_date,
                   'status' => 'inactive', 
                ]);
                Log::info("Schedule is working fine!");
            }
         }
         Log::info("Process done!");
    }
}