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
        $customers = factory(App\Customer::class, 10)->create();
        $experience = factory(App\Experience::class, 5)->create();
        $page_home = factory(App\Page::class)->create([
            'name' => 'home',
            'blade_path' => 'pages.home'
        ]);
        $page_about = factory(App\Page::class)->create([
            'name' => 'about',
            'blade_path' => 'pages.about'
        ]);
        $page_contact = factory(App\Page::class)->create([
            'name' => 'contact',
            'blade_path' => 'pages.contact'
        ]);
    }
}
