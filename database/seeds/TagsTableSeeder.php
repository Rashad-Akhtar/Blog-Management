<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = [
            'tag' => 'html'
        ];

        $t2 = [
            'tag' => 'css'
        ];

        $t3 = [
            'tag' => 'javascript'
        ];

        $t4 = [
            'tag' => 'mysql'
        ];

        Tag::create($t1);
        Tag::create($t2);
        Tag::create($t3);
        Tag::create($t4);
    }
}
