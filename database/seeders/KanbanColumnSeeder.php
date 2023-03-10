<?php

namespace Database\Seeders;

use App\Models\KanbanColumn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KanbanColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KanbanColumn::factory()->count(5)->create();
    }
}
