<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
        [
            [
                'image' => 'images/product1.jpg',
                'title' => 'The Authenticity Project',
                'author' => 'Clare Pooley',
                'price' => '46.50',
                'qty' => '3',
                'descriptions' => 'The Authenticity Project is just the tonic for our times that readers are clamoring for—and one they will take to their hearts and read with unabashed pleasure.',
                'publisher' => 'PENGUIN US',
                'format' => 'Paperback',
                'category' => 'Fiction',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'images/product2.jpg',
                'title' => 'Searching for Sylvie Lee',
                'author' => 'Kwok, Jean',
                'price' => '49.90',
                'qty' => '3',
                'descriptions' => 'It begins with a mystery. Sylvie, the beautiful, brilliant, successful older daughter of the Lee family, flies to the Netherlands for one final visit with her dying grandmother - and then vanishes.',
                'publisher' => 'John Murray',
                'format' => 'Paperback',
                'category' => 'Fiction',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'images/product3.jpg',
                'title' => 'Lost Connections: Depression',
                'author' => 'Hari, Johann',
                'price' => '91.50',
                'qty' => '2',
                'descriptions' => 'Lost Connections offers a radical new way of thinking about this crisis. It shows that once we understand the real causes, we can begin to turn to pioneering new solutions - ones that offer real hope.',
                'publisher' => 'PENGUIN US',
                'format' => 'Hardback',
                'category' => 'Non-Fiction',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'images/product4.jpg',
                'title' => 'Toxic : a guide to rebuilding respect and tolerance in a hostile workplace',
                'author' => 'Clive Lewis',
                'price' => '84.90',
                'qty' => '5',
                'descriptions' => 'In Toxic, Clive Lewis draws upon his decades of experience in HR and mediation to distill the problems and underlying causes of toxic workplaces before tackling the issue head-on. He draws upon first-hand case studies from an eclectic array of workplaces (from corporate offices to hospitals) to demonstrate how toxicity can be both prevented and resolved. This is a practical guide for business leaders and HR professionals looking to preserve a peaceful workplace, while also providing tips for employees looking to remain productive and focused when working with troublesome colleagues in difficult environments.',
                'publisher' => 'BLOOMSBURY UK',
                'format' => 'Paperback',
                'category' => 'Non-Fiction',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'images/product6.jpg',
                'title' => 'FIRST WORDS JAPANESE 1ED',
                'author' => 'Clive Lewis',
                'price' => '49.90',
                'qty' => '5',
                'descriptions' => 'Each word is accompanied with a bold illustration and a simple pronunciation guide to make the vocabulary fun and easy to learn. Plus, its small size makes it a handy addition to any trip to Japan.',
                'publisher' => 'Lonely Planet',
                'format' => 'Paperback',
                'category' => 'Childrens',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'image' => 'images/product5.jpg',
                'title' => 'What Is Nintendo?',
                'author' => 'SHAW,GINA',
                'price' => '24.95',
                'qty' => '5',
                'descriptions' => 'Founded in 1889, Nintendo started out as a small playing card company in Japan. Though the cards sold well, Nintendo really became popular when it began creating toys in the 1960s, and then became internationally renowned after developing video games and consoles in the 1970s and `80s. After introducing the world to some of the best-known and top-selling video game franchises of all-time, such as Super Mario Bros., The Legend of Zelda, Animal Crossing, and Pokemon, it`s clear to see why Nintendo is beloved by parents as a company that creates non violet, family-friendly entertainment for kids.',
                'publisher' => 'PENGUIN WORKSHOP',
                'format' => 'Paperback',
                'category' => 'Childrens',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]
    );
    }
}
