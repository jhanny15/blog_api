<?php
 
namespace App\Jobs;
 
use App\Jobs\Job;
use Illuminate\Contracts\Queue\ShouldQueue;

 
class TestJob extends Job implements ShouldQueue
{
    public $queue;
 
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @param  
     * @return void
     */
    public function handle() {
        
        echo "Hello World";
    }   

}