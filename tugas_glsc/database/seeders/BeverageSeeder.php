<?php

namespace Database\Seeders;

use App\Models\Beverage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeverageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beverage::query()->insert(
            [
                [
                    "id" => 1,
                    "name" => "RootBeer",
                    "rating" => 4.1,
                    "desc" => "Vlaudantium enim quasi est quidem magnam voluptate ipsam eos\ntempora quo necessitatibus\ndolor quam autem quasi\nreiciendis et nam sapiente accusantium ",
                    "price" => 20000,
                    "image_path" => "https://awrestaurants.com/sites/default/files/rootbeer_slider.jpg"
                ],
                [
                    "id" => 2,
                    "name" => "Cola",
                    "rating" => 4.6,
                    "desc" => "est natus enim nihil est dolore omnis voluptatem numquam\net omnis occaecati quod ullam at\nvoluptatem error expedita pariatur\nnihil sint nostrum voluptatem reiciendis et",
                    "price" => 17000,
                    "image_path" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2Dyu-ppPMe8VDLlKEimudhDEDFkMKsyOr3w&usqp=CAU"
                ],
                [
                    "id" => 3,
                    "name" => "Milk Tea",
                    "rating" => 5,
                    "desc" => "non et atque\noccaecati deserunt quas accusantium unde odit nobis qui voluptatem\nquia voluptas consequuntur itaque dolor\net qui rerum deleniti ut occaecati",
                    "price" => 25000,
                    "image_path" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRE9NuP8MUm3yL9NOKqxX9iV5v38_Lj2ekmLg&usqp=CAU"
                ],
                [
                    "id" => 4,
                    "name" => "Mineral Water",
                    "rating" => 3.5,
                    "desc" => "harum non quasi et ratione\ntempore iure ex voluptates in ratione\nharum architecto fugit inventore cupiditate\nvoluptates magni quo et",
                    "price" => 10000,
                    "image_path" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1zU-vnlQ0t3wnbEk7Op6ID9AW3U7d2ep3-Q&usqp=CAU"
                ],
                [
                    "id" => 5,
                    "name" => "Infused Water",
                    "rating" => 3.1,
                    "desc" => "non et atque\noccaecati deserunt quas accusantium unde odit nobis qui voluptatem\nquia voluptas consequuntur itaque dolor\net qui rerum deleniti ut occaecati",
                    "price" => 15000,
                    "image_path" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQth7czOyL5ml-aovzHcVKoF1qUEt_RTGWxbQ&usqp=CAU"
                ]
            ]
        );
    }
}
