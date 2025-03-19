<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;

class FilmSeeder extends Seeder
{
    public function run(): void
    {
        Film::insert([
            ['title' => 'Star Wars', 'description' => 'Egy galaxis közötti harc története.', 'age_rating' => '12+', 'language' => 'Magyar', 'poster_image' => 'starwars.jpg'],
            ['title' => 'The Lion King', 'description' => 'Egy oroszlán felemelkedése és megváltása.', 'age_rating' => '6+', 'language' => 'Magyar', 'poster_image' => 'lionking.jpg'],
            ['title' => 'A Gyűrűk Ura', 'description' => 'Egy gyűrű története, amely mindent megváltoztat.', 'age_rating' => '12+', 'language' => 'Angol', 'poster_image' => 'lordoftherings.jpg'],
            ['title' => 'Harry Potter és a Bölcsek Köve', 'description' => 'Egy varázslótanonc kalandjai.', 'age_rating' => '12+', 'language' => 'Magyar', 'poster_image' => 'harrypotter.jpg'],
            ['title' => 'Jurassic Park', 'description' => 'Dinoszauruszok térnek vissza az életbe.', 'age_rating' => '12+', 'language' => 'Magyar', 'poster_image' => 'jurassicpark.jpg'],
            ['title' => 'Avatar', 'description' => 'Egy távoli bolygó titokzatos világában játszódik.', 'age_rating' => '12+', 'language' => 'Angol', 'poster_image' => 'avatar.jpg'],
            ['title' => 'Titanic', 'description' => 'Egy romantikus történet a tragikus hajószerencsétlenség idején.', 'age_rating' => '12+', 'language' => 'Angol', 'poster_image' => 'titanic.jpg'],
            ['title' => 'Batman: A Sötét Lovag', 'description' => 'Batman és a Joker harca Gotham városáért.', 'age_rating' => '16+', 'language' => 'Angol', 'poster_image' => 'darkknight.jpg'],
            ['title' => 'Életrevalók', 'description' => 'Két világból kitaszított férfi minden előzetes várakozást felülíró barátságának igaz története', 'age_rating' => '12+', 'language' => 'Magyar', 'poster_image' => 'intouchables.jpg'],
            ['title' => 'Frozen', 'description' => 'Egy jéggel és varázslattal teli történet.', 'age_rating' => '6+', 'language' => 'Magyar', 'poster_image' => 'frozen.jpg'],
            ['title' => 'Shrek', 'description' => 'Egy zöld ogre kalandjai egy varázslatos világban.', 'age_rating' => '6+', 'language' => 'Magyar', 'poster_image' => 'shrek.jpg'],
            ['title' => 'A Bosszúállók', 'description' => 'Szuperhősök csapata megmenti a világot.', 'age_rating' => '12+', 'language' => 'Magyar', 'poster_image' => 'avengers.jpg'],
            ['title' => 'Pókember: Hazatérés', 'description' => 'Egy fiatal hős története, aki megpróbál helyt állni.', 'age_rating' => '12+', 'language' => 'Magyar', 'poster_image' => 'spiderman.jpg'],
            ['title' => 'Aladdin', 'description' => 'Egy varázslatos lámpa története.', 'age_rating' => '6+', 'language' => 'Magyar', 'poster_image' => 'aladdin.jpg'],
            ['title' => 'Mátrix', 'description' => 'Egy alternatív valóság és a harcosok története.', 'age_rating' => '16+', 'language' => 'Angol', 'poster_image' => 'matrix.jpg'],
            ['title' => 'Deadpool', 'description' => 'Egy különc szuperhős humorral és akcióval.', 'age_rating' => '18+', 'language' => 'Magyar', 'poster_image' => 'deadpool.jpg'],
            ['title' => 'Coco', 'description' => 'Egy fiatal zenész története a halottak világában.', 'age_rating' => '6+', 'language' => 'Magyar', 'poster_image' => 'coco.jpg'],
            ['title' => 'Moana', 'description' => 'Egy bátor lány kalandjai az óceánon.', 'age_rating' => '6+', 'language' => 'Magyar', 'poster_image' => 'moana.jpg'],
            ['title' => 'A Hihetetlen család', 'description' => 'Egy szuperhős család kalandjai.', 'age_rating' => '6+', 'language' => 'Magyar', 'poster_image' => 'incredibles.jpg'],
            ['title' => 'Eredet', 'description' => 'Egy csapat álomtolvaj kalandjai.', 'age_rating' => '16+', 'language' => 'Angol', 'poster_image' => 'inception.jpg'],
        ]);
    }
}
