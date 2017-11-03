<?php


use App\Tag;
use App\Post;
use App\Category;
use App\Download;
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
          El macho adulto tiene la espalda verde-bronce, volviéndose más bronceado en la cola.
          ";
          $post->published_at = Carbon::now()->subDays(1);
          $post->category_id = 12;
          $post->area_id = 12;
          $post->lugar_id = 2;
          $post->user_id = 3;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->ownername = "Guillermo";
          $post->ownerapaterno = "López";
          $post->owneramaterno = "Escalera Argueta";
          $post->ownerarea = "Oficina de Enlace con la Sociedad";
          $post->ownerestado = "Veracruz";
          $post->ownerciudad = "Xalapa";
          $post->ownercorreo = "guillermo.lopez@inecol.mx";
          $post->ownerurl = "www.guillermo.com";
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
          $post->user_id = 3;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->ownername = "Guillermo";
          $post->ownerapaterno = "López";
          $post->owneramaterno = "Escalera Argueta";
          $post->ownerarea = "Oficina de Enlace con la Sociedad";
          $post->ownerestado = "Veracruz";
          $post->ownerciudad = "Xalapa";
          $post->ownercorreo = "guillermo.lopez@inecol.mx";
          $post->ownerurl = "www.guillermo.com";
          $post->save();





          DB::table('post_tag')->truncate();
          $post = new Post;
          $post->title = "Dalia";
          $post->ncientifico = "Dahlia coccinea";
          $post->url = str_slug("Dalia");
          $post->excerpt = "Dahlia coccinea es una planta perenne, herbácea, de entre 0.4 y 3 m de altura, con raíces tuberosas.
           Los tallos son purpúreos o verdes, erectos, estriados, glabros o escasamente pilosos. Las hojas, pinnadas a tripinnado-compuestas,
            tienen márgenes crenado-aserrados y miden hasta 35 cm de largo.

            Los tubérculos de Dahlia coccinea, que tienen un alto valor nutricional, eran consumidos como alimento en el México prehispánico.
             Este uso en gran parte se extinguió después de la Conquista española.
            ";
          $post->published_at = Carbon::now()->subDays(3);
          $post->category_id = 12;
          $post->area_id = 12;
          $post->lugar_id = 2;
          $post->user_id = 3;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->ownername = "Guillermo";
          $post->ownerapaterno = "López";
          $post->owneramaterno = "Escalera Argueta";
          $post->ownerarea = "Oficina de Enlace con la Sociedad";
          $post->ownerestado = "Veracruz";
          $post->ownerciudad = "Xalapa";
          $post->ownercorreo = "guillermo.lopez@inecol.mx";
          $post->ownerurl = "www.guillermo.com";
          $post->save();

          DB::table('post_tag')->truncate();
          $post = new Post;
          $post->title = "Encino";
          $post->ncientifico = "Quercus germana";
          $post->url = str_slug("Encino");
          $post->excerpt = "Quercus germana es una especie endémica del bosque mesófilo de montaña de México. La presión de selección que
           la fragmentación y los cambios ambientales ejercen, sugieren diferenciación fenotípica. Por lo anterior, la relación de la
            diferenciación foliar de Q. germana con la fragmentación y las condiciones ambientales se evaluó en seis sitios del bosque
             mesófilo de Xalapa, Veracruz.";
          $post->published_at = Carbon::now()->subDays(4);
          $post->category_id = 12;
          $post->area_id = 12;
          $post->lugar_id = 2;
          $post->user_id = 3;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->ownername = "Guillermo";
          $post->ownerapaterno = "López";
          $post->owneramaterno = "Escalera Argueta";
          $post->ownerarea = "Oficina de Enlace con la Sociedad";
          $post->ownerestado = "Veracruz";
          $post->ownerciudad = "Xalapa";
          $post->ownercorreo = "guillermo.lopez@inecol.mx";
          $post->ownerurl = "www.guillermo.com";
          $post->save();

          DB::table('post_tag')->truncate();
          $post = new Post;
          $post->title = "Cacomixtle";
          $post->ncientifico = "Bassariscus";
          $post->url = str_slug("Cacomixtle");
          $post->excerpt = "Bassariscus es un género de mamífero carnívoro perteneciente a la familia Procyonidae. Existen dos especies
           en el género: el rintel (B. astutus) y el cacomixtle (B. sumichrasti). Los estudios genéticos has sugerido que el grupo más
            cercano a Bassariscus son los mapaches.
            El género fue descrito inicialmente por Elliott Coues en 1887.Su hábitat incluye las zonas semiáridas del suroccidente de
            Estados Unidos,3​ y la selva tropical húmeda de América Central.";
          $post->published_at = Carbon::now()->subDays(5);
          $post->category_id = 12;
          $post->area_id = 12;
          $post->lugar_id = 2;
          $post->user_id = 3;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->ownername = "Guillermo";
          $post->ownerapaterno = "López";
          $post->owneramaterno = "Escalera Argueta";
          $post->ownerarea = "Oficina de Enlace con la Sociedad";
          $post->ownerestado = "Veracruz";
          $post->ownerciudad = "Xalapa";
          $post->ownercorreo = "guillermo.lopez@inecol.mx";
          $post->ownerurl = "www.guillermo.com";
          $post->save();

          DB::table('post_tag')->truncate();
          $post = new Post;
          $post->title = "Salamandra";
          $post->ncientifico = "Thorius dubitus";
          $post->url = str_slug("Salamandra");
          $post->excerpt = "La salamandra pigmea de Acultzingo (Thorius dubitus) es una especie de salamandra en la familia
           Plethodontidae del orden Caudata. El género Thorius es uno de los vertebrados más pequeños que existen. Esta especie
           es de talla pequeña y cuerpo poco robusto. Alcanza una longitud de 19 a 20 cm. La cola es corta y robusta. Los nostrilos
           son alargados y grandes. Las extremidades son muy cortas; los dígitos se encuentran fusionados. La coloración del cuerpo
            es oscura. Presenta una banda dorsal verdosa en un fondo de color grisáceo.";
          $post->published_at = Carbon::now()->subDays(6);
          $post->category_id = 12;
          $post->area_id = 12;
          $post->lugar_id = 2;
          $post->user_id = 3;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->ownername = "Guillermo";
          $post->ownerapaterno = "López";
          $post->owneramaterno = "Escalera Argueta";
          $post->ownerarea = "Oficina de Enlace con la Sociedad";
          $post->ownerestado = "Veracruz";
          $post->ownerciudad = "Xalapa";
          $post->ownercorreo = "guillermo.lopez@inecol.mx";
          $post->ownerurl = "www.guillermo.com";
          $post->save();

          DB::table('post_tag')->truncate();
          $post = new Post;
          $post->title = "Rana de arbol";
          $post->ncientifico = "Agalychnis dacnicolor";
          $post->url = str_slug("Rana de arbol");
          $post->excerpt = "Agalychnis dacnicolor es una especie de anfibio de la familia Hylidae. Es endémica de México. Sus
          hábitats naturales incluyen bosques tropicales o subtropicales secos, ríos intermitentes, marismas intermitentes de
           agua dulce, zonas de almacenamiento de aguas y estanques. Está amenazada de extinción por la destrucción de su hábitat natural.";
          $post->published_at = Carbon::now()->subDays(7);
          $post->category_id = 12;
          $post->area_id = 12;
          $post->lugar_id = 2;
          $post->user_id = 3;
          $post->ubicacion = "19.532234018950863,-96.92231423476562";
          $post->ownername = "Guillermo";
          $post->ownerapaterno = "López";
          $post->owneramaterno = "Escalera Argueta";
          $post->ownerarea = "Oficina de Enlace con la Sociedad";
          $post->ownerestado = "Veracruz";
          $post->ownerciudad = "Xalapa";
          $post->ownercorreo = "guillermo.lopez@inecol.mx";
          $post->ownerurl = "www.guillermo.com";
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

          DB::table('post_tag')->insert([
                'id' => '3',
                'post_id' => '3',
                'tag_id' => '6',
          ]);

          DB::table('post_tag')->insert([
                'id' => '4',
                'post_id' => '4',
                'tag_id' => '6',
          ]);

          DB::table('post_tag')->insert([
                'id' => '5',
                'post_id' => '5',
                'tag_id' => '3',
          ]);

          DB::table('post_tag')->insert([
                'id' => '6',
                'post_id' => '6',
                'tag_id' => '17',
          ]);

          DB::table('post_tag')->insert([
                'id' => '7',
                'post_id' => '7',
                'tag_id' => '17',
          ]);

// FOTOS
          DB::table('photos')->insert([
            'id' => '1',
            'post_id' => '1',
            'url' => 'posts/Colibrí_magnifico.jpeg',
          ]);

          DB::table('photos')->insert([
                'id' => '2',
                'post_id' => '2',
                'url' => 'posts/libelula.jpg',
          ]);

          DB::table('photos')->insert([
                'id' => '3',
                'post_id' => '3',
                'url' => 'posts/Dalia.jpg',
          ]);

          DB::table('photos')->insert([
                'id' => '4',
                'post_id' => '4',
                'url' => 'posts/Encino.jpg',
          ]);

          DB::table('photos')->insert([
                'id' => '5',
                'post_id' => '5',
                'url' => 'posts/Cacomixtle.jpg',
          ]);

          DB::table('photos')->insert([
                'id' => '6',
                'post_id' => '6',
                'url' => 'posts/Salamandra.jpg',
          ]);

          DB::table('photos')->insert([
                'id' => '7',
                'post_id' => '7',
                'url' => 'posts/Rana.jpg',
          ]);

/////////////////////////////
          DB::table('downloads')->insert([
                'id' => '1',
                'clicks' => '1',

          ]);




    }
}
