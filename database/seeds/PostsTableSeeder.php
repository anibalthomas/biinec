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
          Storage::disk('public')->deleteDirectory('posts');
          Post::truncate();

          // DB::table('post_tag')->truncate();
          // $post = new Post;
          // $post->title = "Hipopótamo";
          // $post->ncientifico = "Hippopotamus amphibius";
          // $post->url = str_slug("Hipopótamo");
          // $post->excerpt = "Mamífero paquidermo de unos 4 m de longitud, cuerpo muy voluminoso, piel gruesa negruzca y casi sin pelo, patas gruesas y cortas,
          //  cabeza con boca enorme y orejas pequeñas; nada bien, se alimenta de vegetales y vive en pequeños grupos en los grandes ríos y lagos africanos.";
          // $post->published_at = Carbon::now()->subDays(4);
          // $post->category_id = 1;
          // $post->area_id = 1;
          // $post->lugar_id = 1;
          // $post->ubicacion = "19.532234018950863,-96.92231423476562";
          // $post->save();


          // DB::table('post_tag')->truncate();
          // $post = new Post;
          // $post->title = "Serpiente";
          // $post->ncientifico = "Serpentes";
          // $post->url = str_slug("Serpiente");
          // $post->excerpt = "Las serpientes u ofidios son un suborden de saurópsidos diápsidos pertenecientes al orden Squamata, superorden de los Lepidosaurios, caracterizado por la ausencia de patas ​ y el cuerpo muy alargado. Se originaron en el período Cretácico.";
          // $post->published_at = Carbon::now()->subDays(3);
          // $post->category_id = 1;
          // $post->area_id = 1;
          // $post->lugar_id = 1;
          // $post->ubicacion = "19.532234018950863,-96.92231423476562";
          // $post->save();


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
          $post->save();


          // DB::table('post_tag')->truncate();
          // $post = new Post;
          // $post->title = "Águila real";
          // $post->ncientifico = "Aquila chrysaetos";
          // $post->url = str_slug("Águila real");
          // $post->excerpt = "Al igual que en la mayoría de las aves de presa, las hembras son mayores que los machos, pudiendo llegar al metro de longitud desde el pico a la cola y los 2,3 metros de envergadura alar, y un peso de entre 4 y 6,75 kg, mientras que el macho, de un tamaño menor, alcanza entre 1,8 y 2 metros de envergadura alar y un peso de entre 2,9 y 4,5 kg.";
          // $post->published_at = Carbon::now()->subDays(1);
          // $post->category_id = 2;
          // $post->area_id = 1;
          // $post->lugar_id = 1;
          // $post->ubicacion = "19.532234018950863,-96.92231423476562";
          // $post->save();

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
          $post->save();

          // DB::table('post_tag')->insert([
          //       'id' => '1',
          //       'post_id' => '1',
          //       'tag_id' => '3',
          // ]);
          //
          // DB::table('post_tag')->insert([
          //       'id' => '2',
          //       'post_id' => '2',
          //       'tag_id' => '17',
          // ]);

          DB::table('post_tag')->insert([
                'id' => '1',
                'post_id' => '1',
                'tag_id' => '1',
          ]);

          // DB::table('post_tag')->insert([
          //       'id' => '4',
          //       'post_id' => '4',
          //       'tag_id' => '1',
          // ]);

          DB::table('post_tag')->insert([
                'id' => '2',
                'post_id' => '2',
                'tag_id' => '4',
          ]);





    }
}
