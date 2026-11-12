<?php

namespace Database\Seeders;

use App\Models\GalleryItem;
use App\Models\Slide;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        // =========================================
        // Slides del carrusel hero
        // =========================================
        $slides = [
            [
                'title'      => 'Más de 30 años cultivando <span class="text-amber-400 italic font-serif">vida</span> en el café',
                'subtitle'   => 'Productores tseltales de café agroecológico bajo sombra. Desde 2025, con equipo propio de torrefacción para llevarte café en oro verde, tostado y molido.',
                'badge_text' => 'Jomanichim, Tenejapa, Chiapas · 1,392 msnm',
                'badge_color'=> 'green',
                'image_path' => '/imagenes/cafe/img (3).jpg',
                'cta1_text'  => 'Personalizar Pedido',
                'cta1_url'   => '#productos',
                'cta2_text'  => 'Conocer la Historia',
                'cta2_url'   => '#nosotros',
                'sort_order' => 1,
                'is_active'  => true,
            ],
            [
                'title'      => 'Sabor único ajustado a tu gusto',
                'subtitle'   => 'Variedades arábica garnica y caturra tostadas al punto que prefieras. Claro para acidez suave, medio para mayor aroma, oscuro para una bebida intensa.',
                'badge_text' => 'Tueste Claro • Medio • Oscuro',
                'badge_color'=> 'red',
                'image_path' => '/imagenes/cafe/img (2).jpg',
                'cta1_text'  => 'Elegir Presentación',
                'cta1_url'   => '#productos',
                'cta2_text'  => null,
                'cta2_url'   => null,
                'sort_order' => 2,
                'is_active'  => true,
            ],
            [
                'title'      => 'Frescura protegida hasta tu hogar',
                'subtitle'   => 'Empacado en bolsas laminadas con válvula desgasificadora. Molido medio para cafetera o molido fino para café de olla. Envíos a toda la República Mexicana.',
                'badge_text' => 'Bolsa Laminada con Válvula · 250g, 500g, 1 kg',
                'badge_color'=> 'amber',
                'image_path' => '/imagenes/cafe/img (1).jpg',
                'cta1_text'  => 'Comprar Ahora',
                'cta1_url'   => '#contacto',
                'cta2_text'  => null,
                'cta2_url'   => null,
                'sort_order' => 3,
                'is_active'  => true,
            ],
        ];

        foreach ($slides as $slideData) {
            Slide::updateOrCreate(
                ['image_path' => $slideData['image_path']],
                $slideData
            );
        }

        // =========================================
        // Imágenes de la galería / moodboard
        // =========================================
        $galleryItems = [
            ['label' => '1. Maduración en planta',    'image_path' => '/imagenes/procesos/1.Maduración en planta.jpg',       'sort_order' => 1],
            ['label' => '2. Corte selectiva',          'image_path' => '/imagenes/procesos/2. Corte selectiva.jpg',            'sort_order' => 2],
            ['label' => '3. En su punto',              'image_path' => '/imagenes/procesos/3. En su punto.jpg',               'sort_order' => 3],
            ['label' => '4. Pergamino secado al sol',  'image_path' => '/imagenes/procesos/4. Pergamino secado al sol.jpeg',  'sort_order' => 4],
            ['label' => '5. Nivel de tueste',          'image_path' => '/imagenes/procesos/5. Nivel de tueste.jpg',           'sort_order' => 5],
            ['label' => '6. Oro verde seleccionado',   'image_path' => '/imagenes/procesos/6. Oro verde seleccionado.jpg',    'sort_order' => 6],
            ['label' => '7. Tostado en grano',         'image_path' => '/imagenes/procesos/7. Tostado en grano.jpg',          'sort_order' => 7],
            ['label' => '8. Pergamino en costal de yute', 'image_path' => '/imagenes/procesos/Pergamino en costal yute.jpeg', 'sort_order' => 8],
        ];

        foreach ($galleryItems as $item) {
            GalleryItem::updateOrCreate(
                ['label' => $item['label']],
                array_merge($item, ['is_active' => true])
            );
        }
    }
}
