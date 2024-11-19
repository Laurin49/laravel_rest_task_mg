<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    $admin_id = User::where('name', 'Admin')->first()->id;
    $welter_id = User::where('name', 'Welter')->first()->id;
    $schonlau_id = User::where('name', 'Schonlau')->first()->id;

    $project_nachtschicht = Project::where('title', 'Nachtschicht')->first()->id;
    $project_beintraining = Project::where('title', 'Beintraining')->first()->id;
    $project_bizepstraining = Project::where('title', 'Bizepstraining')->first()->id;

    Task::create(['creator_id' => $welter_id, 'project_id' => $project_nachtschicht, 'title' => 'Kasse prüfen', 'is_done' => 0]);
    Task::create(['creator_id' => $welter_id, 'project_id' => $project_nachtschicht, 'title' => 'Dienstplan Ärzte', 'is_done' => 0]);
    Task::create(['creator_id' => $welter_id, 'project_id' => $project_nachtschicht, 'title' => 'Kassenbuch neu erstellen', 'is_done' => 0]);
    Task::create(['creator_id' => $welter_id, 'project_id' => $project_nachtschicht, 'title' => 'Eigenanteile kontrollieren', 'is_done' => 0]);
    Task::create(['creator_id' => $welter_id, 'project_id' => $project_nachtschicht, 'title' => 'In Mappe sortieren', 'is_done' => 0]);
    Task::create(['creator_id' => $welter_id, 'project_id' => $project_nachtschicht, 'title' => 'Aufnahmen kontrollieren', 'is_done' => 0]);
    Task::create(['creator_id' => $welter_id, 'project_id' => $project_nachtschicht, 'title' => 'Briefe RL / WL drucken', 'is_done' => 0]);
    Task::create(['creator_id' => $welter_id, 'project_id' => $project_nachtschicht, 'title' => 'Verlegungen kontrollieren', 'is_done' => 0]);
    Task::create(['creator_id' => $welter_id, 'project_id' => $project_nachtschicht, 'title' => 'Entlassungen kontrollieren', 'is_done' => 0]);
    Task::create(['creator_id' => $welter_id, 'project_id' => $project_nachtschicht, 'title' => 'Vorstationär / Nachstationär Aufnahmen', 'is_done' => 0]);
    Task::create(['creator_id' => $welter_id, 'project_id' => $project_nachtschicht, 'title' => 'EOFM Zuzahlung Briefe drucken', 'is_done' => 0]);
    Task::create(['creator_id' => $welter_id, 'project_id' => $project_nachtschicht, 'title' => 'Stationsgrafik überprüfen', 'is_done' => 0]);

    Task::create(['creator_id' => $schonlau_id, 'project_id' => $project_beintraining, 'title' => 'Kniebeugen', 'is_done' => 0]);
    Task::create(['creator_id' => $schonlau_id, 'project_id' => $project_beintraining, 'title' => 'Beinstrecken', 'is_done' => 0]);
    Task::create(['creator_id' => $schonlau_id, 'project_id' => $project_beintraining, 'title' => 'Bein-Curls', 'is_done' => 0]);
    Task::create(['creator_id' => $schonlau_id, 'project_id' => $project_beintraining, 'title' => 'Wadenheben', 'is_done' => 0]);
    Task::create(['creator_id' => $schonlau_id, 'project_id' => $project_beintraining, 'title' => 'Scott-Curls K.H.', 'is_done' => 0]);
    Task::create(['creator_id' => $schonlau_id, 'project_id' => $project_bizepstraining, 'title' => 'Hammer-Curls K.H.', 'is_done' => 0]);
    Task::create(['creator_id' => $schonlau_id, 'project_id' => $project_bizepstraining, 'title' => 'Schrägbank-Curls K.H.', 'is_done' => 0]);
    Task::create(['creator_id' => $schonlau_id, 'project_id' => $project_bizepstraining, 'title' => 'Konzentrations-Curls K.H.', 'is_done' => 0]);
    Task::create(['creator_id' => $schonlau_id, 'project_id' => $project_bizepstraining, 'title' => 'Langhantel Curls', 'is_done' => 0]);
  }
}
