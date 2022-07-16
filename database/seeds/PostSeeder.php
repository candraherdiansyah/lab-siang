<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['title' => 'Belajar Laravel',
                'content' => 'Laravel is Awesome'],
            ['title' => 'Belajar PHP',
                'content' => 'PHP is Great'],
        ];
        DB::table('post')->insert($sample);
    }
}
