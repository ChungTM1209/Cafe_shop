<?php

use Illuminate\Database\Seeder;

class CategoryTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category();
        $category->id = "1";
        $category->name = "Đồ ăn ";
        $category ->save();



        $category = new \App\Category();
        $category->id = "2";
        $category->name="Đồ uống";
        $category->save();
    }
}
