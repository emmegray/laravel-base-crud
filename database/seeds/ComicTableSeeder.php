<?php

use App\Comic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = GetComics();
        foreach ($comics as $comic) {
            $new_comic = new Comic();

            $new_comic->title = $comic->title;
            $new_comic->cover = $comic->image;
            $new_comic->type = $comic->type;
            $new_comic->slug = Str::slug($comic->title, '-');

            $new_comic->save();
        }
    }
}
