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
        \App\User::create([
            'name' => 'dom',
            'email' => 'dom@dom.fr',
            'password' => bcrypt('secret'),
        ]);
         $this->call(PostsTableSeeder::class);
        $customers = factory(App\Customer::class,10)->create();
        $experience = factory(App\Experience::class,5)->create();
        $pages = factory(App\Page::class,10)->create();
        $seo = factory(App\Seo::class)->create();
    }
}
