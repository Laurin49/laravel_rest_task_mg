<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $welter_id = User::where('name', 'Welter')->first()->id;
    $schonlau_id = User::where('name', 'Schonlau')->first()->id;

    Project::create(['creator_id' => $welter_id, 'title' => 'Nachtschicht']);
    Project::create(['creator_id' => $schonlau_id, 'title' => 'Beintraining']);
    Project::create(['creator_id' => $schonlau_id, 'title' => 'Bizepstraining']);
  }
}
