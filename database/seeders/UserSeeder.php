<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    User::create([
      'name' => 'Admin',
      'email' => 'admin@hsv.de',
      'password' => bcrypt('hsv1887tv'),
      'email_verified_at' => now(),
    ]);
    User::create([
      'name' => 'Welter',
      'email' => 'welter@hsv.de',
      'password' => bcrypt('hsv1887tv'),
      'email_verified_at' => now(),
    ]);
    User::create([
      'name' => 'Schonlau',
      'email' => 'schonlau@hsv.de',
      'password' => bcrypt('hsv1887tv'),
      'email_verified_at' => now(),
    ]);
    User::create([
      'name' => 'L.Reis',
      'email' => 'reis@hsv.de',
      'password' => bcrypt('hsv1887tv'),
      'email_verified_at' => now(),
    ]);
    User::create([
      'name' => 'M.Muheim',
      'email' => 'muheim@hsv.de',
      'password' => bcrypt('hsv1887tv'),
      'email_verified_at' => now(),
    ]);
  }
}
