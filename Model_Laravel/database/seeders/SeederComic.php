<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ComicModel;

class SeederComic extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ComicModel::factory()->count(10)->create();
    }
}
