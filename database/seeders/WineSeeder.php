<?php

namespace Database\Seeders;

use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wines = [
            [
                'name' => 'CHATEAU DE SAINT COSME',
                'year' => '2009',
                'grapes' => 'Grenache / Syrah',
                'country' => 'France',
                'region' => 'Southern Rhone / Gigondas',
                'description' => 'The aromas of fruit and spice...',
                'picture' => 'https://www.wine-searcher.com/images/labels/96/84/10599684.jpg?width=260&height=260&fit=bounds&canvas=260,260',
                'price' => 13.99,
            ],
            [
                'name' => 'LAN RIOJA CRIANZA',
                'year' => '2006',
                'grapes' => 'Tempranillo',
                'country' => 'Spain',
                'region' => 'Rioja',
                'description' => 'A resurgence of interest in boutique vineyards...',
                'picture' => 'https://cdn.klwines.com/images/skus/1060162x.jpg',
                'price' => 21.99,
            ],
            [
                'name' => 'MARGERUM SYBARITE',
                'year' => '2010',
                'grapes' => 'Sauvignon Blanc',
                'country' => 'USA',
                'region' => 'California Central Cosat',
                'description' => 'The aromas of fruit and spice...',
                'picture' => 'https://images.vivino.com/thumbs/TjOjOUhPSoCH1_QDI6b2Rw_pb_300x300.png',
                'price' => 25.99,
            ],
            [
                'name' => 'OWEN ROE "EX UMBRIS"',
                'year' => '2009',
                'grapes' => 'Syrah',
                'country' => 'USA',
                'region' => 'Washington',
                'description' => 'Aromas of blackberry, anise, black...',
                'picture' => 'https://cdn.klwines.com/images/skus/1075792x.jpg',
                'price' => 45.99,
            ],
            [
                'name' => 'REX HILL',
                'year' => '2009',
                'grapes' => 'Pinot Noir',
                'country' => 'USA',
                'region' => 'Oregon',
                'description' => 'Soft, supple plum envelopes an...',
                'picture' => 'https://cdn.klwines.com/images/skus/1073974x.jpg',
                'price' => 16.99,
            ],
            [
                'name' => 'VITICCIO CLASSICO RISERVA',
                'year' => '2007',
                'grapes' => 'Sangiovese Merlot',
                'country' => 'Italy',
                'region' => 'Tuscany',
                'description' => 'Aromas of wild berry, violet...',
                'picture' => 'https://cdn.klwines.com/images/skus/1076000x.jpg',
                'price' => 45.99,
            ],
            [
                'name' => 'CHATEAU LE DOYENNE',
                'year' => '2005',
                'grapes' => 'Merlot',
                'country' => 'France',
                'region' => 'Bordeaux',
                'description' => 'Here is a fine, ripe, fruity wine...',
                'picture' => 'https://static.wixstatic.com/media/0c171c_a8ef0566d22848b8b865c19cf1234fe2.jpg/v1/fill/w_480,h_717,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/0c171c_a8ef0566d22848b8b865c19cf1234fe2.jpg',
                'price' => 12.99,
            ],
            [
                'name' => 'DOMAINE DU BOUSCAT',
                'year' => '2009',
                'grapes' => 'Merlot',
                'country' => 'France',
                'region' => 'Bordeaux',
                'description' => 'Soft, ripe creamed fruit flavors...',
                'picture' => 'https://images.vivino.com/thumbs/DTKDWtIJShihtVuNYfyZSw_pb_600x600.png',
                'price' => 23.99,
            ],
            [
                'name' => 'BLOCK NINE',
                'year' => '2009',
                'grapes' => 'Pinot Noir',
                'country' => 'USA',
                'region' => 'California',
                'description' => 'Aromas of wild berry, violet...',
                'picture' => 'https://cdn.klwines.com/images/skus/1075956x.jpg',
                'price' => 13.99,
            ],
            [
                'name' => 'DOMAINE SERENE "GRACE VINEYARD"',
                'year' => '2006',
                'grapes' => 'Pinot Noir',
                'country' => 'USA',
                'region' => 'Oregon',
                'description' => 'There\'s a tart and delicious...',
                'picture' => 'https://encinitas.meritagewinemarket.com/images/sites/encinitas/labels/domaine-serene-grace-vineyard-pinot-noir_1.jpg',
                'price' => 29.99,
            ],
            [
                'name' => 'BODEGA LURTON PINOT GRIS RESERVA',
                'year' => '2011',
                'grapes' => 'Pinot Gris',
                'country' => 'Argentina',
                'region' => 'Mendoza',
                'description' => 'Solidly built, with a core...',
                'picture' => 'https://www.wine-searcher.com/images/labels/61/73/10296173.jpg',
                'price' => 8.99,
            ],
            [
                'name' => 'LES MORIZOTTES',
                'year' => '2009',
                'grapes' => 'Chardonnay',
                'country' => 'France',
                'region' => 'Burgundy',
                'description' => 'Pierre-Yves has produced an...',
                'picture' => 'https://worldsbestwines.eu/wp-content/uploads/Macon-Les-Morizottes-Domaine-Larochette-Manciat.jpg',
                'price' => 39.99,
            ]
        ];
        foreach($wines as $key => $value) {
            Wine::create($value);
        }
    }
}
