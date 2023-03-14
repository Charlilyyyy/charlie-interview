<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InputSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Input::create([
            'index' => 'A1',
            'value' => 41
        ]);

        \App\Models\Input::create([
            'index' => 'A2',
            'value' => 18
        ]);

        \App\Models\Input::create([
            'index' => 'A3',
            'value' => 21
        ]);

        \App\Models\Input::create([
            'index' => 'A4',
            'value' => 63
        ]);

        \App\Models\Input::create([
            'index' => 'A5',
            'value' => 2
        ]);

        \App\Models\Input::create([
            'index' => 'A6',
            'value' => 53
        ]);

        \App\Models\Input::create([
            'index' => 'A7',
            'value' => 5
        ]);

        \App\Models\Input::create([
            'index' => 'A8',
            'value' => 57
        ]);

        \App\Models\Input::create([
            'index' => 'A9',
            'value' => 60
        ]);

        \App\Models\Input::create([
            'index' => 'A10',
            'value' => 93
        ]);

        \App\Models\Input::create([
            'index' => 'A11',
            'value' => 28
        ]);

        \App\Models\Input::create([
            'index' => 'A12',
            'value' => 3
        ]);

        \App\Models\Input::create([
            'index' => 'A13',
            'value' => 90
        ]);

        \App\Models\Input::create([
            'index' => 'A14',
            'value' => 39
        ]);

        \App\Models\Input::create([
            'index' => 'A15',
            'value' => 80
        ]);

        \App\Models\Input::create([
            'index' => 'A16',
            'value' => 88
        ]);

        \App\Models\Input::create([
            'index' => 'A17',
            'value' => 49
        ]);

        \App\Models\Input::create([
            'index' => 'A18',
            'value' => 60
        ]);

        \App\Models\Input::create([
            'index' => 'A19',
            'value' => 26
        ]);

        \App\Models\Input::create([
            'index' => 'A20',
            'value' => 28
        ]);
    }
}
