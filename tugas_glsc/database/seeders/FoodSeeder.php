<?php

namespace Database\Seeders;

use App\Models\Food;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Food::query()->insert(
            [
                [
                    "food_id" => "FD001",
                    "name" => "Chicken Steak",
                    "rating" => 4.5,
                    "desc" => "Vlaudantium enim quasi est quidem magnam voluptate ipsam eos\ntempora quo necessitatibus\ndolor quam autem quasi\nreiciendis et nam sapiente accusantium ",
                    "price" => 30000,
                    "image_path" => "https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/12/13/1757037310.jpg"
                ],
                [
                    "food_id" => "FD002",
                    "name" => "Burger",
                    "rating" => 4.9,
                    "desc" => "est natus enim nihil est dolore omnis voluptatem numquam\net omnis occaecati quod ullam at\nvoluptatem error expedita pariatur\nnihil sint nostrum voluptatem reiciendis et",
                    "price" => 47000,
                    "image_path" => "https://asset.kompas.com/crops/yqHUrUMME2QSGILGvNH-LYuTdns=/12x51:892x637/780x390/data/photo/2022/03/05/622358ed771fb.jpg"
                ],
                [
                    "food_id" => "FD003",
                    "name" => "Ramen",
                    "rating" => 5,
                    "desc" => "non et atque\noccaecati deserunt quas accusantium unde odit nobis qui voluptatem\nquia voluptas consequuntur itaque dolor\net qui rerum deleniti ut occaecati",
                    "price" => 68000,
                    "image_path" => "https://img.okezone.com/content/2020/09/23/298/2282695/mau-coba-mi-ala-korea-masak-chicken-curry-ramen-yuk-Y1IpqtQ3Be.jpg"
                ],
                [
                    "food_id" => "FD004",
                    "name" => "Sushi",
                    "rating" => 4.5,
                    "desc" => "harum non quasi et ratione\ntempore iure ex voluptates in ratione\nharum architecto fugit inventore cupiditate\nvoluptates magni quo et",
                    "price" => 55000,
                    "image_path" => "https://assets.promediateknologi.com/crop/0x0:0x0/x/photo/2021/10/18/1367732748.jpg"
                ],
                [
                    "food_id" => "FD005",
                    "name" => "Pho",
                    "rating" => 3.9,
                    "desc" => "non et atque\noccaecati deserunt quas accusantium unde odit nobis qui voluptatem\nquia voluptas consequuntur itaque dolor\net qui rerum deleniti ut occaecati",
                    "price" => 51000,
                    "image_path" => "https://assets.bonappetit.com/photos/601185e9e0a941bb1291e9e2/3:2/w_1854,h_1236,c_limit/GoLive-Beef-Pho.jpg"
                ]
            ]
        );

    }
}
