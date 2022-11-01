<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        DB::table('products')->insert([
            [
                'name' => 'Nice Summer',
                'price' => '15000.00',
                'category' => 'Vestidos',
                'description' => 'Deslumbra en tu día perfecto con este diseño del carismático Pep Lebun',
                'gallery' => 'http://www.revistanovias.co/sites/default/files/styles/interna/public/field/image/jenny_amador-001.jpg',
            ],
            [
                'name' => 'Roses Dream',
                'price' => '1500.00',
                'category' => 'Ramos',
                'description' => 'Paquete de 500 pétalos de rosas listos para que sean desechados en 15 minutos.',
                'gallery' => 'https://myuvci.com/blog/wp-content/uploads/2016/03/Cancun-wedding-1200x550.jpg',
            ],
            [
                'name' => 'Guilty Pleasure',
                'price' => '5000.00',
                'category' => 'Pasteles',
                'description' => 'Haz que tus invitados salgan rodando con este delicioso pastel de niveles',
                'gallery' => 'https://octanecdn.com/whereyatcom/a4dcec0158b.jpg',
            ],
            [
                'name' => 'Salon de eventos',
                'price' => '20000.00',
                'category' => 'Salones',
                'description' => 'Demuéstrale a tus invitados que tienes el poder económico para poder rentar este salón.',
                'gallery' => 'https://www.blackwellgrange.co.uk/wp-content/uploads/2020/01/Header_minimalist-wedding-ideas.jpg',
            ],
            [
                'name' => 'Smooth day',
                'price' => '25000.00',
                'category' => 'Vestidos',
                'description' => 'Si aborreces a Pep Lebun este vestido es para ti; diseñado por las magníficas manos de Lebron James.',
                'gallery' => 'http://www.revistanovias.co/sites/default/files/styles/interna/public/field/image/diana_rolando_novias.jpg',
            ],
            [
                'name' => 'Social session',
                'price' => '2000.00',
                'category' => 'Sesiones',
                'description' => '¿Necesitas subir el mejor día de tu vida a redes por que si no piensas que no lo tuviste?. Tenemos a los mejores fotógrafos de la colonia',
                'gallery' => 'https://wedding.papanaga.com/wp-content/uploads/2021/04/bosa-wedding-img-40-1200x550.jpg',
            ],
            [
                'name' => 'Roses dream',
                'price' => '5000.00',
                'category' => 'Ramos',
                'description' => 'Dales la bendición a la siguiente pareja con este hermoso ramo.',
                'gallery' => 'https://www.consumer.es/app/uploads/fly-images/100641/img_novia-ramo-1200x550-cc.jpg',
            ],
            [
                'name' => 'Invitaciones (500pz)',
                'price' => '1500.00',
                'category' => 'Pasteles',
                'description' => 'Paquete de 500 piezas de invitaciones para que dejes de hacer eventos en facebook',
                'gallery' => 'https://ae01.alicdn.com/kf/Ha56ad3422ad549d4be6f1f7967102543r.jpg',
            ],
            [
                'name' => 'Make up',
                'price' => '2000.00',
                'category' => 'Sesiones',
                'description' => 'Si eres una princesa ¿por que no verte como una?',
                'gallery' => 'http://www.revistanovias.co/sites/default/files/styles/interna/public/field/image/maquillaje10.jpg',
            ]
        ]);
    }
}
