<?php

use Illuminate\Database\Seeder;
#imported model 
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comic');
        foreach($comics as $comic) {
            $new_comic = new Comic();
            $new_comic->title = $comic['title'];
            $new_comic->description = $comic['description'];
            $new_comic->type = $comic['type'];
            // $new_comic->image = $comic['src'];
            $new_comic->series = $comic['series'];
            $new_comic->price = $comic['price'];
            $new_comic->save();
        }
    }
}