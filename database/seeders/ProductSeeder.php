<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Stuffed Portobello Mushrooms',
                'category_id' => 1,
                'description' => 'Large portobello mushrooms filled with a mixture of spinach, goat cheese, and walnuts, baked until tender and topped with a balsamic glaze.',
                'image_url' => 'https://www.acouplecooks.com/wp-content/uploads/2021/02/Stuffed-Portobello-Mushrooms-017s.jpg',
                'price' => 9.99,
            ],
            [
                'name' => 'Sweet Potato Fries',
                'category_id' => 1,
                'description' => 'Thinly sliced sweet potato fries seasoned with cumin and paprika and served with a side of spicy sriracha aioli.',
                'image_url' => 'https://debraklein.com/wp-content/uploads//2017/01/Sweet-Potato-Fries-14.jpg',
                'price' => 9.99,
            ],
            [
                'name' => 'Zucchini Fritters',
                'category_id' => 1,
                'description' => 'Crispy fritters made with shredded zucchini, carrots, and onions, served with a side of tzatziki sauce.',
                'image_url' => 'https://rasamalaysia.com/wp-content/uploads/2017/08/zucchini-fritters-thumb.jpg',
                'price' => 9.99,
            ],
            [
                'name' => 'Harvest Bowl',
                'category_id' => 2,
                'description' => 'A bowl filled with quinoa, roasted sweet potatoes, sautéed kale, crispy chickpeas, and a drizzle of tahini dressing.',
                'image_url' => 'https://tastesbetterfromscratch.com/wp-content/uploads/2015/11/Harvest-Bowl-Web-8.jpg',
                'price' => 9.99,
            ],
            [
                'name' => 'Spicy Lentil Curry',
                'category_id' => 2,
                'description' => 'A flavorful curry made with lentils, carrots, sweet potatoes, and coconut milk, served over a bed of brown rice.',
                'image_url' => 'https://healthynibblesandbits.com/wp-content/uploads/2020/04/Red-Lentil-Curry-FF.jpg',
                'price' => 9.99,
            ],
            [
                'name' => 'Eggplant Parmesan',
                'category_id' => 2,
                'description' => 'Layers of breaded and baked eggplant slices, marinara sauce, and melted mozzarella cheese, served with a side of garlic bread.',
                'image_url' => 'https://food.fnr.sndimg.com/content/dam/images/food/fullset/2018/2/16/0/FNK_Eggplant-Parmesan-H-111_s4x3.jpg.rend.hgtvcom.616.462.suffix/1518807329709.jpeg',
                'price' => 9.99,
            ],
            [
                'name' => 'Vegan Chocolate Avocado Mousse',
                'category_id' => 3,
                'description' => 'A rich and creamy chocolate mousse made with avocados, almond milk, and cocoa powder, topped with fresh berries.',
                'image_url' => 'https://i0.wp.com/www.thedishonhealthy.com/wp-content/uploads/2018/03/vegan-chocolate-pudding.jpg?fit=3024%2C4032&ssl=1',
                'price' => 9.99,
            ],
            [
                'name' => 'Carrot Cake',
                'category_id' => 3,
                'description' => 'A moist and spiced carrot cake topped with a tangy cream cheese frosting and crushed walnuts.',
                'image_url' => 'https://cheneetoday.com/wp-content/uploads/2021/03/mini-carrot-cake.jpg',
                'price' => 9.99,
            ],
            [
                'name' => 'Fruit Skewers',
                'category_id' => 3,
                'description' => 'Skewers of fresh seasonal fruits like strawberries, kiwis, and pineapples, drizzled with a honey-lime glaze and served with a side of coconut whipped cream.',
                'image_url' => 'https://www.acouplecooks.com/wp-content/uploads/2022/06/Fruit-Skewers-014.jpg',
                'price' => 9.99,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
