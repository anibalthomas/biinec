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
          // Storage::disk('public')->deleteDirectory('posts');
          Post::truncate();

          DB::table('post_tag')->truncate();
          $post = new Post;
          $post->title = "Colibrí magnifico";
          $post->ncientifico = "Eugenes fulgens";
          $post->url = str_slug("Colibrí magnifico");
          $post->excerpt = "El colibrí magnífico (Eugenes fulgens) es un colibrí cuyo rango de distribución se extiende desde las montañas del suroeste de los Estados Unidos hasta el oeste de Panamá. Es el único miembro del género Eugenes.
          Mide 13 cm de largo. El macho pesa 10 g y la hembra 8.5 g. El pico es negro, largo y ligeramente curvado. Ambos sexos lucen de color oscuro a menos que la luz del sol capte la iridiscencia y los brillantes colores del plumaje.
          El macho adulto tiene la espalda verde-bronce, volviéndose más bronceado en la cola. La coronilla es de color violeta, la garganta verde-azul brillante, y el resto de la cabeza es negro, exceptuando un punto blanco detrás del ojo. El pecho es verde-bronce y el vientre es grisáceo.
          La hembra de Colibrí Magnífico tiene la espalda verde-bronce y el vientre gris pálido. Hay una línea blanca detrás del ojo. Los ejemplares jóvenes son como la hembra, pero más oscuros y amarronados.
          La hembra se encarga completamente de la construcción del nido y de la incubación. El nido es una taza voluminosa localizada a cerca de 3 m del suelo y la nidada consta de dos huevos blancos. La incubación dura de 15 a 19 días y los polluelos tardan de unos 20 a 26 días en comenzar a volar.
          Esta especie se alimenta de néctar, que consiguen de una amplia variedad de flores, y pequeños insectos. El macho se posa en un lugar visible y defiende sus territorios de alimentación agresivamente. El llamado de la especie es un drrrk gutural.
          ";
          $post->published_at = Carbon::now()->subDays(2);
          $post->category_id = 12;
          $post->area_id = 12;
          $post->lugar_id = 2;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->user_id = 1;
          $post->save();

          DB::table('post_tag')->truncate();
          $post = new Post;
          $post->title = "Caballito del Diablo";
          $post->ncientifico = "Sympetrum corruptum";
          $post->url = str_slug("Caballito del Diablo");
          $post->excerpt = "La libélula abigarrada (Sympetrum corruptum) pertenece a la familia de las libélulas rayadoras (Libellulidae)
          es una especie de amplia distribución, tiene un largo y tardío periodo de vuelo y los adultos a veces sobreviven el invierno 1.
          Algunas poblaciones de S. corruptum son migratorias, se conocen rutas a lo largo de la costa del pacífico en Norteamérica 1.";
          $post->published_at = Carbon::now()->subDays(2);
          $post->category_id = 12;
          $post->area_id = 4;
          $post->lugar_id = 2;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->user_id = 1;
          $post->save();

          DB::table('post_tag')->insert([
                'id' => '1',
                'post_id' => '1',
                'tag_id' => '1',
          ]);

          DB::table('post_tag')->insert([
                'id' => '2',
                'post_id' => '2',
                'tag_id' => '4',
          ]);

// FOTOS
          DB::table('photos')->insert([
                'id' => '1',
                'post_id' => '1',
                'url' => 'posts/libelula.jpg',
          ]);

          DB::table('photos')->insert([
                'id' => '2',
                'post_id' => '2',
                'url' => 'posts/Colibrí_magnifico.jpeg',
          ]);



    }
}
