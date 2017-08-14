<?php


use App\Tag;
use App\Post;
use App\Category;
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
          Tag::truncate();


          $post = new Post;
          $post->title = "Hipopótamo";
          $post->ncientifico = "Hippopotamus amphibius";
          $post->url = str_slug("Hipopótamo");
          $post->excerpt = "Mamífero paquidermo de unos 4 m de longitud, cuerpo muy voluminoso, piel gruesa negruzca y casi sin pelo, patas gruesas y cortas,
           cabeza con boca enorme y orejas pequeñas; nada bien, se alimenta de vegetales y vive en pequeños grupos en los grandes ríos y lagos africanos.";
          $post->published_at = Carbon::now()->subDays(4);
          $post->category_id = 1;
          $post->area_id = 1;
          $post->lugar_id = 1;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->save();

          $post->tags()->attach(Tag::create(['name' => 'mamífero']));

          $post = new Post;
          $post->title = "Serpiente";
          $post->ncientifico = "Serpentes";
          $post->url = str_slug("Serpiente");
          $post->excerpt = "Las serpientes u ofidios son un suborden de saurópsidos diápsidos pertenecientes al orden Squamata, superorden de los Lepidosaurios, caracterizado por la ausencia de patas ​ y el cuerpo muy alargado. Se originaron en el período Cretácico.";
          $post->published_at = Carbon::now()->subDays(3);
          $post->category_id = 1;
          $post->area_id = 1;
          $post->lugar_id = 1;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->save();

          $post->tags()->attach(Tag::create(['name' => 'reptil']));
          $post->tags()->attach(Tag::create(['name' => 'oviparo']));

          $post = new Post;
          $post->title = "Colibrí";
          $post->ncientifico = "Trochilidae";
          $post->url = str_slug("Colibrí");
          $post->excerpt = "Son unas minúsculas aves americanas que se caracterizan por el colorido de su plumaje, su forma de volar y por los hábitos peculiares de alimentación que poseen. Emiten un zumbido con las alas, que mueven con mayor rapidez que las de cualquier otra ave, hasta el extremo de que no se distinguen cuando vuelan.";
          $post->published_at = Carbon::now()->subDays(2);
          $post->category_id = 1;
          $post->area_id = 1;
          $post->lugar_id = 1;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->save();

          $post->tags()->attach(Tag::create(['name' => 'ave']));

          $post = new Post;
          $post->title = "Águila real";
          $post->ncientifico = "Aquila chrysaetos";
          $post->url = str_slug("Águila real");
          $post->excerpt = "Al igual que en la mayoría de las aves de presa, las hembras son mayores que los machos, pudiendo llegar al metro de longitud desde el pico a la cola y los 2,3 metros de envergadura alar, y un peso de entre 4 y 6,75 kg, mientras que el macho, de un tamaño menor, alcanza entre 1,8 y 2 metros de envergadura alar y un peso de entre 2,9 y 4,5 kg.";
          $post->published_at = Carbon::now()->subDays(1);
          $post->category_id = 2;
          $post->area_id = 1;
          $post->lugar_id = 1;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->save();


          $post->tags()->attach(Tag::create(['name' => 'vertebrado']));






    }
}
