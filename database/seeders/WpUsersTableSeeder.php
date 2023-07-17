<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WpUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wp_users')->delete();
        
        \DB::table('wp_users')->insert(array (
            0 => 
            array (
                'ID' => 1,
                'user_login' => 'headred',
                'user_pass' => '$P$BrE.Xt4nifDDaxz9ATE4mynGQMBqj10',
                'user_nicename' => 'headred',
                'user_email' => 'yash@headred.net',
                'user_url' => 'http://127.0.0.1:8000/cms',
                'user_registered' => '2023-07-17 11:34:00',
                'user_activation_key' => '',
                'user_status' => 0,
                'display_name' => 'headred',
            ),
        ));
        
        
    }
}