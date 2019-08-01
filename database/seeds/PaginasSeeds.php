<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exists = Pagina::where('tipo','=','sobre')->count();
        if($exists){
        	$pgSobre = Pagina::where('tipo','=','sobre')->first();
        }else{
        	$pgSobre = new Pagina();
        }

        $pgSobre->titulo = "A empresa";
        $pgSobre->descricao = "Ex adipisci quam quisquam quos ad ipsa voluptatem, labore sed provident optio nam consequatur praesentium, explicabo autem";
        $pgSobre->texto = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet voluptate officia, totam consectetur tempora quidem at, esse minus id ducimus dolorem, corrupti iusto voluptas ratione vel laboriosam? Iusto, voluptatibus odio. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex adipisci quam quisquam quos ad ipsa voluptatem, labore sed provident optio nam consequatur praesentium, explicabo autem dolorum debitis similique deleniti nisi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo id eligendi, commodi impedit nobis eaque neque, mollitia harum velit nesciunt perferendis voluptas dolores, sapiente eum magnam aut itaque libero porro. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias minima incidunt sapiente dolorum magni aliquam neque veritatis consequuntur labore inventore necessitatibus odio, quia, cumque numquam non, nam fuga optio ut. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, totam cumque qui assumenda vero dolore ullam quae, cupiditate unde id deserunt eaque. Dicta, pariatur assumenda minima quod distinctio quidem voluptatum?";
        $pgSobre->imagem = "img/modelo_img_home.jpg";
        //$pgSobre->mapa = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230483.77483005798!2d-49.43022493137636!3d-25.494739832496823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce35351cdb3dd%3A0x6d2f6ba5bacbe809!2sCuritiba%2C+PR!5e0!3m2!1spt-BR!2sbr!4v1564655302882!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
        $pgSobre->tipo = "sobre";
        $pgSobre->save();

        echo "Pagina 'Sobre' criada com sucesso!</br>";
    }
}
