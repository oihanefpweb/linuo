<?php

namespace Database\Seeders;

use App\Models\Estudios;
use App\Models\Experiencia;
use App\Models\Skills;
use App\Models\User;
use DateTime;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $jsonString = file_get_contents(base_path("database/seeders/linkedin_data.json"));
        $users = json_decode($jsonString, true);
        foreach($users as $userData){
            $user = new User();
            $user->nombre = $userData["personalInfo"]["name"];
            $user->apellido1 = $userData["personalInfo"]["lastName1"];
            $user->apellido2 = $userData["personalInfo"]["lastName2"];
            foreach($userData["contactInfo"] as $contactInfo){
                if($contactInfo["type"] == "mobile"){
                    $user->telefono = $contactInfo["value"];
                }else if($contactInfo["type"] == "email"){
                    $user->email = $contactInfo["value"];
                }
            }
            $user->save();
            foreach($userData["experience"] as $experienceData){
                $experience = new Experiencia();
                $experience->puesto = $experienceData["position"];
                $experience->nombre = $experienceData["business"];
                $experience->tipo_contrato = $experienceData["jobType"];
                $experience->localizacion = $experienceData["location"];
                $experience->descripcion = $experienceData["description"];
                $experience->fecha_inicio = new DateTime($experienceData["startDate"]);
                $experience->fecha_fin = new DateTime($experienceData["finalDate"]);
                $experience->persona = $user->id;
                $experience->save();
            }

            foreach($userData["studies"] as $studiesData){
                $estudios = new Estudios();
                $estudios->nombre = $studiesData["degree"];
                $estudios->centro = $studiesData["college"];
                $estudios->fecha_inicio = $studiesData["startYear"];
                $estudios->fecha_fin = $studiesData["finalYear"];
                $estudios->persona = $user->id;
                $estudios->save();
            }

            foreach($userData["skills"] as $skillData){
                $skill = new Skills();
                $skill->nombre = $skillData;
                $skill->persona = $user->id;
                $skill->save();
            }
        }
    }
}
