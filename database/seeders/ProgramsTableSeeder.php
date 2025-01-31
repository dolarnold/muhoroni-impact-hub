<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Program::create([
            'title' => 'Education for All',
            'description' => 'Providing quality education to underprivileged children.',
            'image' => 'education.jpg',
        ]);
    
        \App\Models\Program::create([
            'title' => 'Women Empowerment',
            'description' => 'Empowering women through skill development programs.',
            'image' => 'women-empowerment.jpg',
        ]);
}
}
