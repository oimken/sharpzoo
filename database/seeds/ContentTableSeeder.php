<?php

use Illuminate\Database\Seeder;
use App\Sharp\Content\Content;

class ContentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('contents')->delete();

        $faker = Faker\Factory::create('en_US');

        for( $x=0 ; $x<10; $x++ )
        {
            Content::create([
                'parent_id' => 0,
                'lft' => 0,
                'rgt' => 0,
                'depth' => 0,
                'slug' =>$faker->word,
                'type' => $faker->randomElement(['page','article','memo','media','module','link']),
                'user_id' => $faker->numberBetween(1, 2),
                'private' => 0,

                'uri' =>$faker->url,

                'status' => 'published',
                'pvs' => 0,
                'comment_open' => 0,
                'comment_count' => 0
            ]);
        }
    }

} 