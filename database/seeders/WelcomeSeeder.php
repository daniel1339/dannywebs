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
                'name' => 'Pagina web Kartonar',
                'description' => 'Esta pagina se creo para darle visibilidad a la empresa y mas importancia a lo que busca el usuario y a una atención agil y personalizada' ,
                'image' => 'rooms/kartonar.jpeg',
                
                
               
            ],
          
            [
                'name' => 'Rental fincas Colombia',
                'description' => 'Pagina web para ofrecer rentar y vender las mejores fincas en el pais tratando de personalizar al maximo la atención',
                
                'image' => 'rooms/monito.jpeg',
               
            ],
            [
                'name' => 'E.R.P Kartonar',
                'description' => 'Este sistema esta diseñado especialmente para optimizar los procesos de producción de kartonar, mejorando los costos y las cotizaciones de ventas ',
               
                'image' => 'rooms/tabla.jpeg',
               
            ],

            [
                'name' => 'Cabaña autoadministrable',
                'description' => 'Este sistema esta diseñado especialmente para optimizar los procesos de producción de kartonar, mejorando los costos y las cotizaciones de ventas ',
               
                'image' => 'rooms/cabana.jpeg',
               
            ],

            [
                'name' => 'Comercio electronico',
                'description' => 'Este sistema esta diseñado especialmente para optimizar los procesos de producción de kartonar, mejorando los costos y las cotizaciones de ventas ',
               
                'image' => 'rooms/filtros.jpeg',
               
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
