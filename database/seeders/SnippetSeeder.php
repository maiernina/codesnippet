<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SnippetSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('snippets')->insert([
            [
                'title' => 'Hallo Welt',
                'code' => 'echo "Hallo Welt!";'
            ],
            [
                'title' => 'For-Schleife',
                'code' => 'for($i = 0; $i < 10; $i++) { echo $i; }'
            ],
            [
                'title' => 'Laravel Route',
                'code' => "Route::get('/', function () {\n    return view('welcome');\n});"
            ]
        ]);
    }
}
