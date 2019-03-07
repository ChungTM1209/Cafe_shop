<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TableSeed::class);
        $this->call(CategoryTableSeed::class);
<<<<<<< HEAD
        $this->call(ProductTableSeeder::class);
=======
        $this->call(CreateUsersTableSeed::class);
>>>>>>> 72262007742e3b4da6b4aa840c8b1a6d8f87d02d
    }
}
