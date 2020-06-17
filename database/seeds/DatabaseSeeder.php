<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        Category::insert([
        	'name' => 'Business',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);

        Category::insert([
        	'name' => 'Sport',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);

        Category::insert([
        	'name' => 'Culture',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);

        Category::insert([
        	'name' => 'Politics',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);

        Category::insert([
        	'name' => 'Science',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);

        Category::insert([
        	'name' => 'Health',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);

        Category::insert([
        	'name' => 'Style',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);

        Category::insert([
        	'name' => 'Travel',
        	'created_at' => now(),
        	'updated_at' => now()
        ]);

        User::insert([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory('App\User', 50)->create();
        factory('App\Post', 200)->create();
        factory('App\Comment', 400)->create();
    }
}
