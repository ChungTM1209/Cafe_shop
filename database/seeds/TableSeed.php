<?php

use Illuminate\Database\Seeder;

class TableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = new \App\Table();
        $table->name = 'Bàn 1';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Bàn 2';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Bàn 3';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Bàn 4';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Bàn 5';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Bàn 6';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Bàn 7';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Bàn 8';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Bàn 9';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Bàn 10';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Bàn 11';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Bàn 12';
        $table->save();


    }
}
