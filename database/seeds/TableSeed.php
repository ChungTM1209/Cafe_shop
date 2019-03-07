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
        $table->name = 'Ban 1';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Ban 2';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Ban 3';
        $table->save();

        $table = new \App\Table();
        $table->name = 'Ban 4';
        $table->save();

    }
}
