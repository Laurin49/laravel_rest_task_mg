<?php

namespace Database\Seeders;

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

    Task::create(['title' => 'Kasse prüfen', 'is_done' => 0]);
    Task::create(['title' => 'Dienstplan Ärzte', 'is_done' => 0]);
    Task::create(['title' => 'Kassenbuch neu erstellen', 'is_done' => 0]);
    Task::create(['title' => 'Eigenanteile kontrollieren', 'is_done' => 0]);
    Task::create(['title' => 'In Mappe sortieren', 'is_done' => 0]);
    Task::create(['title' => 'Aufnahmen kontrollieren', 'is_done' => 0]);
    Task::create(['title' => 'Briefe RL / WL drucken', 'is_done' => 0]);
    Task::create(['title' => 'Verlegungen kontrollieren', 'is_done' => 0]);
    Task::create(['title' => 'Entlassungen kontrollieren', 'is_done' => 0]);
    Task::create(['title' => 'Vorstationär / Nachstationär Aufnahmen', 'is_done' => 0]);
    Task::create(['title' => 'EOFM Zuzahlung Briefe drucken', 'is_done' => 0]);
    Task::create(['title' => 'Stationsgrafik überprüfen', 'is_done' => 0]);

    Task::create(['title' => 'Kniebeugen', 'is_done' => 0]);
    Task::create(['title' => 'Beinstrecken', 'is_done' => 0]);
    Task::create(['title' => 'Bein-Curls', 'is_done' => 0]);
    Task::create(['title' => 'Wadenheben', 'is_done' => 0]);
    Task::create(['title' => 'Scott-Curls K.H.', 'is_done' => 0]);
    Task::create(['title' => 'Hammer-Curls K.H.', 'is_done' => 0]);
    Task::create(['title' => 'Schrägbank-Curls K.H.', 'is_done' => 0]);
    Task::create(['title' => 'Konzentrations-Curls K.H.', 'is_done' => 0]);
    Task::create(['title' => 'Langhantel Curls', 'is_done' => 0]);
  }
}
