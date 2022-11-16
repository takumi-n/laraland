<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
            'id' => 1,
            'name' => 'Laravel 入門1',
            'description' => 'Laravel で開発するための環境構築を行います',
        ]);
        Course::create([
            'id' => 2,
            'name' => 'Laravel 入門2',
            'description' => 'Laravel を使った基本的な MVC モデルの開発を行います',
        ]);
        Course::create([
            'id' => 3,
            'name' => 'Laravel 入門3',
            'description' => 'Laravel を使って認証付きアプリケーションを開発します',
        ]);
    }
}
