<?php

use Illuminate\Database\Seeder;
use App\Sharp\Content\ContentMeta;

class ContentMetaTableSeeder extends Seeder {

    public function run()
    {
        DB::table('content_metas')->delete();

        $faker = Faker\Factory::create('en_US');

        for( $x=0 ; $x<30; $x++ )
        {
            ContentMeta::create([
                'lang'  => 'en',
                'content_id' => $x,
                'title' => $faker->sentence(),
                'content' => $faker->paragraph(),
                'keywords' => $faker->word(),
                'excerpt' => $faker->paragraph(),
            ]);
            ContentMeta::create([
                'lang'  => 'zh',
                'content_id' => $x,
                'title' => $faker->sentence(),
                'content' => $faker->paragraph(),
                'keywords' => $faker->word(),
                'excerpt' => $faker->paragraph(),
            ]);
        }
    }

} 