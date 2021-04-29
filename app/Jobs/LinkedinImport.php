<?php

namespace App\Jobs;

use App\Http\Api\LinkedinApiManager;
use DateTime;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Symfony\Component\ErrorHandler\Debug;

class LinkedinImport implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

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
     * @return void
     */
    public function handle()
    {
        $cron_jobs = DB::select("SELECT * from cron_jobs WHERE last_update <= ?", (new DateTime())->getTimestamp());
        
        $linkedin_api_manager = new LinkedinApiManager();
        foreach($cron_jobs as $job){
            $http_response = $linkedin_api_manager->get_user(/*data que hay que enviar a linkedin para obtener al usuario*/);
            if($http_response->successful()){
                $response_data = $http_response->object();
                //TODO gestionar los datos recibidos
            }
            //mas un dia
            DB::update("UPDATE cron_jobs SET last_update = ? WHERE id = ?", [(new DateTime())->getTimestamp() ,$job->id]);
        }
    }
}
