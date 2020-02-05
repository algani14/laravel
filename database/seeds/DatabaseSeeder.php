<?php
use App\Barang;
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
        // $this->call(PostsSeeder::class);
        // $this->call(PostsTableSeeder::class);
        // $this->call(ArtikelSeeder::class);
        factory(Barang::class,100)->create();

    }
}
