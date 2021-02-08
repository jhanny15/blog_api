<?php

namespace App\Http\Controllers;

use App\Jobs\TestJob;
use Illuminate\Support\Facades\Queue;

class TestJobController extends Controller
{
    public function testEcho(){

        $job = (new TestJob);
        Queue::push($job);

        echo 'Job Saved';
    }
}