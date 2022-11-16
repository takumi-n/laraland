<?php

namespace Database\Seeders;

use App\Models\Lesson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lesson::create([
            'title' => 'PHP のインストール',
            'description' => 'PHP をインストールします',
            'required_time' => '30分',
            'step_no' => 1,
            'course_id' => 1,
        ]);
        Lesson::create([
            'title' => 'Composer のインストール',
            'description' => 'Composer をインストールします',
            'required_time' => '5分',
            'step_no' => 2,
            'course_id' => 1,
        ]);

        Lesson::create([
            'title' => 'Laravel プロジェクトのセットアップ',
            'description' => 'Composer を使って Laravel プロジェクトをセットアップします',
            'required_time' => '1時間',
            'step_no' => 1,
            'course_id' => 2,
        ]);
        Lesson::create([
            'title' => 'Laravel プロジェクトを理解する',
            'description' => 'セットアップされたプロジェクトのディレクトリ構成を理解します',
            'required_time' => '30分',
            'step_no' => 2,
            'course_id' => 2,
        ]);
    }
}
