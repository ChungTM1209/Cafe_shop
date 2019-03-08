<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product();
        $product->name = 'Cafe';
        $product->price = '50000';
        $product->amount = '5';
        $product->detail = 'Cafe Hà Nội';
        $product->category_id = '2';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Bò khô';
        $product->price = '50000';
        $product->amount = '6';
        $product->detail = ' Hà Nội';
        $product->category_id = '1';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Bạc Xỉu';
        $product->price = '50000';
        $product->amount = '6';
        $product->detail = ' Hà Nội';
        $product->category_id = '2';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Hứng Dương';
        $product->price = '50000';
        $product->amount = '6';
        $product->detail = ' Hà Nội';
        $product->category_id = '1';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Cốt Dừa Cà Phê';
        $product->price = '50000';
        $product->amount = '6';
        $product->detail = ' Hà Nội';
        $product->category_id = '2';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Ngô Cay';
        $product->price = '50000';
        $product->amount = '6';
        $product->detail = ' Hà Nội';
        $product->category_id = '1';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Cốt Dừa Cốm Xanh';
        $product->price = '50000';
        $product->amount = '6';
        $product->detail = ' Hà Nội';
        $product->category_id = '2';
        $product->save();

        $product = new \App\Product();
        $product->name = 'Mỳ Tôm Trứng';
        $product->price = '50000';
        $product->amount = '6';
        $product->detail = ' Hà Nội';
        $product->category_id = '1';
        $product->save();

    }
}
