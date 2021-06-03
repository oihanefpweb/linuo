<?php

namespace App\Jobs;

use App\Http\Api\LinkedinApiManager;
use App\Models\User;
use DateInterval;
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
        $linkedin_api_manager = new LinkedinApiManager();
        $users = User::all();

        foreach($users as $user){
            if($user->token!=null){
                $linken_img_data = $linkedin_api_manager->getUser($user->token);
                $photos = $linken_img_data["profilePicture"]["displayImage~"]["elements"];
                $user->foto_perfil = $photos[count($photos)-1]["identifiers"][0]["identifier"];
                $user->save();
            }
        }
    }
}
