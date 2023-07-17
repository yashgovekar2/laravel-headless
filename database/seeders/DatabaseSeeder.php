<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(WpOptionsTableSeeder::class);
        $this->call(WpPostsTableSeeder::class);
        $this->call(WpPostmetaTableSeeder::class);
        $this->call(WpTermsTableSeeder::class);
        $this->call(WpTermRelationshipsTableSeeder::class);
        $this->call(WpTermTaxonomyTableSeeder::class);
        $this->call(WpUsersTableSeeder::class);
        $this->call(WpUsermetaTableSeeder::class);
    }
}
