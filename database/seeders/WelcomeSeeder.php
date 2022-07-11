<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Welcome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WelcomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rooms = [
           

            [
                'slug' => 'pagina-web-kartonar',
                'name' => 'Pagina web Kartonar',
                'description' => 'Esta pagina se creo para darle visibilidad a la empresa y mas importancia a lo que busca el usuario además una atención agil y personalizada' ,
                'image' => 'rooms/kartonar.jpeg',
                'software' => 'Laravel 9 Livewire, Bootstrap'
                
               
            ],
          
            [
                'slug' => 'rental-fincas-Colombia',
                'name' => 'Rental fincas Colombia',
                'description' => 'Pagina web para ofrecer rentar y vender las mejores fincas en el pais tratando de personalizar al maximo la atención',
                
                'image' => 'rooms/monito.jpeg',
                'software' => 'Laravel 9 Livewire, Alpine, Tailwind'
               
            ],
            [
                'slug' => 'e.r.p-kartonar',
                'name' => 'E.R.P Kartonar',
                'description' => 'Este sistema esta diseñado especialmente para optimizar los procesos de producción de kartonar, mejorando los costos y las cotizaciones de ventas, tambien contiene modulos de inventarios y tickets para resolver problemas internos.',
               
                'image' => 'rooms/tabla.jpeg',
                'software' => 'Laravel 9 Livewire, Bootstrap'
            ],

            [
                'slug' => 'cabana-autoadministrable',
                'name' => 'Cabaña autoadministrable',
                'description' => 'Una página web para visibilzar esta cabaña y aprovechar recursos de marketing, es autoadministrable y contiene un módulo para almacenar las cotizaciones y los huespedes que quieran pasar unas vacaciones en el caribe.',
               
                'image' => 'rooms/cabana.jpeg',
                'software' => 'Laravel 9 Livewire, Inertia/Vue.js, Tailwind'
               
            ],

            [
                'slug' => 'comercio-electronico',
                'name' => 'Comercio electrónico',
                'description' => 'Un comercio electrónico para cualquier tipo de producto tangible, es autoadministrable esta integrado con varias plataformas de pago y puede almacenar distintas marcas, colores y tamaños para un mismo producto.',
               
                'image' => 'rooms/filtros.jpeg',
                'software' => 'Laravel 9 Livewire, Alpine, Tailwind'
               
            ],
          
            
        ];
    
        foreach ($rooms as $room) {
            $room = Welcome::create($room)->first();
    }

        $images = [
            [
                'welcome_id' => '1',
                'image' => 'images/kartonar/catalogo.jpeg',
           
            ],

            [
                'welcome_id' => '1',
                'image' => 'images/kartonar/conocenos.jpeg',
           
            ],

            [
                'welcome_id' => '1',
                'image' => 'images/kartonar/cotizar.jpeg',
           
            ],

            [
                'welcome_id' => '1',
                'image' => 'images/kartonar/kartonar.jpeg',
           
            ],

            [
                'welcome_id' => '2',
                'image' => 'images/rental/admin.jpeg',
           
            ],
            [
                'welcome_id' => '2',
                'image' => 'images/rental/base-datos.jpeg',
           
            ],

            [
                'welcome_id' => '2',
                'image' => 'images/rental/crear.jpeg',
           
            ],

            [
                'welcome_id' => '2',
                'image' => 'images/rental/fincas.jpeg',
           
            ],

            [
                'welcome_id' => '2',
                'image' => 'images/rental/lujos.jpeg',
           
            ],

            [
                'welcome_id' => '2',
                'image' => 'images/rental/monito.jpeg',
           
            ],

            [
                'welcome_id' => '3',
                'image' => 'images/sistema/base-datos.jpeg',
           
            ],
            [
                'welcome_id' => '3',
                'image' => 'images/sistema/empresa.jpeg',
           
            ],

            [
                'welcome_id' => '3',
                'image' => 'images/sistema/tabla.jpeg',
           
            ],

            [
                'welcome_id' => '3',
                'image' => 'images/sistema/tiempos.jpeg',
           
            ],

            [
                'welcome_id' => '4',
                'image' => 'images/cabana/admin.jpeg',
           
            ],

            [
                'welcome_id' => '4',
                'image' => 'images/cabana/cabana.jpeg',
           
            ],

            [
                'welcome_id' => '4',
                'image' => 'images/cabana/noche.jpeg',
           
            ],

            [
                'welcome_id' => '5',
                'image' => 'images/ecommerce/admin.jpeg',
           
            ],

            [
                'welcome_id' => '5',
                'image' => 'images/ecommerce/filtros.jpeg',
           
            ],

            [
                'welcome_id' => '5',
                'image' => 'images/ecommerce/menus.jpeg',
           
            ],

            [
                'welcome_id' => '5',
                'image' => 'images/ecommerce/pagos.jpeg',
           
            ],

            [
                'welcome_id' => '5',
                'image' => 'images/ecommerce/producto.jpeg',
           
            ],

            [
                'welcome_id' => '5',
                'image' => 'images/ecommerce/search.jpeg',
           
            ],

        ];

        foreach ($images as $image) {
            $image = Image::create($image)->first();
    }
    }
    
}
