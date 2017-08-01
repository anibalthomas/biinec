<?php


use App\Tag;
use App\Post;
use App\Category;
use App\Area;
use App\Lugar;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Post::truncate();
          Category::truncate();
          Area::truncate();
          Lugar::truncate();
          Tag::truncate();

          $category = new Category;
          $category->name = "Categoria 1";
          $category->save();

          $category = new Category;
          $category->name = "Categoria 2";
          $category->save();

          $area = new Area;
          $area->name = "Area 1";
          $area->save();

          $area = new Area;
          $area->name = "Area 2";
          $area->save();

          $lugar = new Lugar;
          $lugar->name = "Lugar 1";
          $lugar->save();

          $lugar = new Lugar;
          $lugar->name = "Lugar 2";
          $lugar->save();



          $post = new Post;
          $post->title = "Mi primer Post";
          $post->ncientifico = "canus canarius";
          $post->url = str_slug("Mi primer Post");
          $post->excerpt = "Extracto de mi primer post";
          $post->published_at = Carbon::now()->subDays(4);
          $post->category_id = 1;
          $post->area_id = 1;
          $post->lugar_id = 1;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->save();

          $post->tags()->attach(Tag::create(['name' => 'etiqueta 1']));

          $post = new Post;
          $post->title = "Mi segundo Post";
          $post->ncientifico = "canus canarius";
          $post->url = str_slug("Mi segundo Post");
          $post->excerpt = "Extracto de mi segundo post";
          $post->published_at = Carbon::now()->subDays(3);
          $post->category_id = 1;
          $post->area_id = 1;
          $post->lugar_id = 1;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->save();

          $post->tags()->attach(Tag::create(['name' => 'etiqueta 2']));

          $post = new Post;
          $post->title = "Mi tercer Post";
          $post->ncientifico = "canus canarius";
          $post->url = str_slug("Mi tercer Post");
          $post->excerpt = "Extracto de mi tercer post";
          $post->published_at = Carbon::now()->subDays(2);
          $post->category_id = 1;
          $post->area_id = 1;
          $post->lugar_id = 1;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->save();

          $post->tags()->attach(Tag::create(['name' => 'etiqueta 3']));

          $post = new Post;
          $post->title = "Mi cuarto Post";
          $post->ncientifico = "canus canarius";
          $post->url = str_slug("Mi cuarto Post");
          $post->excerpt = "Extracto de mi cuarto post";
          $post->published_at = Carbon::now()->subDays(1);
          $post->category_id = 2;
          $post->area_id = 1;
          $post->lugar_id = 1;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->save();

          $post->tags()->attach(Tag::create(['name' => 'etiqueta 4']));





    }
}
