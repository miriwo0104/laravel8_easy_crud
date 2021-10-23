<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contents = [
            'テスト投稿_1',
            'テスト投稿_2',
            'テスト投稿_3',
            'テスト投稿_4',
            'テスト投稿_5',
            'テスト投稿_6',
            'テスト投稿_7',
            'テスト投稿_8',
        ];

        $now = Carbon::now();
        foreach ($contents as $content) {
            $info = [
                'content' => $content,
                'deleted_flag' => 0,
                'created_at' => $now,
                'updated_at' => $now,
            ];
            DB::table('contents')->insert($info);
        }
    }
}
