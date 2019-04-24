<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                [
                    'title' => 'Lifestyle',
                    'image_url' => 'images/thumbs/masonry/lamp-400.jpg',
                    'content' => 'Text gsdklgnlng gnmdfsng;l mn
                    gfdsgfds
                    fhdfhdsfhhhdf',
                    'category_id' => '1',
                    'user_id' => '1',
                    'views' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Lifestyle',
                    'image_url' => 'images/thumbs/masonry/tulips-400.jpg',
                    'content' => 'Text gsdklgnlng gnmdfsng;l mn
                    gfdsgfds
                    fhdfhdsfhhhdf',
                    'category_id' => '1',
                    'user_id' => '1',
                    'views' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Lifestyle',
                    'image_url' => 'images/thumbs/masonry/cookies-400.jpg',
                    'content' => 'Text gsdklgnlng gnmdfsng;l mn
                    gfdsgfds
                    fhdfhdsfhhhdf',
                    'category_id' => '1',
                    'user_id' => '1',
                    'views' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Lifestyle',
                    'image_url' => 'images/thumbs/masonry/wheel-400.jpg',
                    'content' => 'Text gsdklgnlng gnmdfsng;l mn
                    gfdsgfds
                    fhdfhdsfhhhdf',
                    'category_id' => '1',
                    'user_id' => '1',
                    'views' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Lifestyle',
                    'image_url' => 'images/thumbs/masonry/shutterbug-400.jpg',
                    'content' => 'Text gsdklgnlng gnmdfsng;l mn
                    gfdsgfds
                    fhdfhdsfhhhdf',
                    'category_id' => '1',
                    'user_id' => '1',
                    'views' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Lifestyle',
                    'image_url' => 'images/thumbs/masonry/gallery/gallery-1-400.jpg',
                    'content' => 'Text gsdklgnlng gnmdfsng;l mn
                    gfdsgfds
                    fhdfhdsfhhhdf',
                    'category_id' => '1',
                    'user_id' => '1',
                    'views' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            ]
        );
    }
}
