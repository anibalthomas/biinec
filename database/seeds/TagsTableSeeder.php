<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();

        $tag = new Tag;
        $tag->name = "aves";
        $tag->save();

        $tag = new Tag;
        $tag->name = "anfibios";
        $tag->save();

        $tag = new Tag;
        $tag->name = "mamíferos";
        $tag->save();

        $tag = new Tag;
        $tag->name = "insectos";
        $tag->save();

        $tag = new Tag;
        $tag->name = "hongos";
        $tag->save();

        $tag = new Tag;
        $tag->name = "plantas";
        $tag->save();

        $tag = new Tag;
        $tag->name = "peces";
        $tag->save();

        $tag = new Tag;
        $tag->name = "conservación";
        $tag->save();

        $tag = new Tag;
        $tag->name = "biotecnología";
        $tag->save();

        $tag = new Tag;
        $tag->name = "plagas";
        $tag->save();

        $tag = new Tag;
        $tag->name = "virus";
        $tag->save();

        $tag = new Tag;
        $tag->name = "anhelidos";
        $tag->save();

        $tag = new Tag;
        $tag->name = "parasitos";
        $tag->save();

        $tag = new Tag;
        $tag->name = "genética";
        $tag->save();

        $tag = new Tag;
        $tag->name = "vertebrados";
        $tag->save();

        $tag = new Tag;
        $tag->name = "invertebrados";
        $tag->save();

        $tag = new Tag;
        $tag->name = "reptiles";
        $tag->save();

        $tag = new Tag;
        $tag->name = "algas";
        $tag->save();


    }
}
