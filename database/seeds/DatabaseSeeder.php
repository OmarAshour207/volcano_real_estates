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
         $this->call(UserSeeder::class);
         $this->call(WebsiteSettingsSeed::class);
         $this->call(ThemeSeeder::class);
         $this->call(AboutUsSeeder::class);
    }
}
