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
//        DB::table('users')->truncate();
//        DB::table('roles')->truncate();

//        $this->call(RoleCreateSeeder::class);
//        factory(App\Models\User::class, 10)->create();
        factory(App\Models\Category::class,20)->create();
        factory(App\Models\Post::class,20)->create();
    }
}
