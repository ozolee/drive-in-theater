<?php

namespace Database\Seeders;

use App\Models\Film;
use App\Models\Screening;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScreeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $films = Film::all();
        foreach($films as $film) {
            for ($i = 0; $i < 5; $i++) {
                Screening::create([
                    'time' => Carbon::now()
                        ->addDays(rand(1, 30))
                        ->setTime(rand(7, 20), rand(0, 59)),
                    'available_seats' => rand(30, 120),
                    'film_id' => $film->id,
                ]);
            }
        }
    }
}
