<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FeedbackModel;

class SeederFeedback extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeedbackModel::factory()->count(10)->create();
    }
}
