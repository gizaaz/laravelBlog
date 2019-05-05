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
                    'title' => 'Test',
                    'image_url' => 'lamp-400.jpg',
                    'content' => 'Text gsdklgnlng gnmdfsng;l mn
                    gfdsgfds
                    fhdfhdsfhhhdf',
                    'category_id' => '6',
                    'user_id' => '1',
                    'views' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Test',
                    'image_url' => 'tulips-400.jpg',
                    'content' => 'Text gsdklgnlng gnmdfsng;l mn
                    gfdsgfds
                    fhdfhdsfhhhdf',
                    'category_id' => '6',
                    'user_id' => '1',
                    'views' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Test',
                    'image_url' => 'cookies-400.jpg',
                    'content' => 'Text gsdklgnlng gnmdfsng;l mn
                    gfdsgfds
                    fhdfhdsfhhhdf',
                    'category_id' => '6',
                    'user_id' => '1',
                    'views' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Test',
                    'image_url' => 'wheel-400.jpg',
                    'content' => 'Text gsdklgnlng gnmdfsng;l mn
                    gfdsgfds
                    fhdfhdsfhhhdf',
                    'category_id' => '6',
                    'user_id' => '1',
                    'views' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Test',
                    'image_url' => 'shutterbug-400.jpg',
                    'content' => 'Text gsdklgnlng gnmdfsng;l mn
                    gfdsgfds
                    fhdfhdsfhhhdf',
                    'category_id' => '6',
                    'user_id' => '1',
                    'views' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'title' => 'Test',
                    'image_url' => 'gallery-1-400.jpg',
                    'content' => 'Text gsdklgnlng gnmdfsng;l mn
                    gfdsgfds
                    fhdfhdsfhhhdf',
                    'category_id' => '6',
                    'user_id' => '1',
                    'views' => '0',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]
            ]
        );
    }
}
