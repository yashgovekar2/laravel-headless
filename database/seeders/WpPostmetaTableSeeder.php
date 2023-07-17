<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WpPostmetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wp_postmeta')->delete();
        
        \DB::table('wp_postmeta')->insert(array (
            0 => 
            array (
                'meta_id' => 1,
                'post_id' => 2,
                'meta_key' => '_wp_page_template',
                'meta_value' => 'default',
            ),
            1 => 
            array (
                'meta_id' => 2,
                'post_id' => 3,
                'meta_key' => '_wp_page_template',
                'meta_value' => 'default',
            ),
            2 => 
            array (
                'meta_id' => 3,
                'post_id' => 3,
                'meta_key' => '_wp_trash_meta_status',
                'meta_value' => 'draft',
            ),
            3 => 
            array (
                'meta_id' => 4,
                'post_id' => 3,
                'meta_key' => '_wp_trash_meta_time',
                'meta_value' => '1689593735',
            ),
            4 => 
            array (
                'meta_id' => 5,
                'post_id' => 3,
                'meta_key' => '_wp_desired_post_slug',
                'meta_value' => 'privacy-policy',
            ),
            5 => 
            array (
                'meta_id' => 6,
                'post_id' => 2,
                'meta_key' => '_wp_trash_meta_status',
                'meta_value' => 'publish',
            ),
            6 => 
            array (
                'meta_id' => 7,
                'post_id' => 2,
                'meta_key' => '_wp_trash_meta_time',
                'meta_value' => '1689593736',
            ),
            7 => 
            array (
                'meta_id' => 8,
                'post_id' => 2,
                'meta_key' => '_wp_desired_post_slug',
                'meta_value' => 'sample-page',
            ),
            8 => 
            array (
                'meta_id' => 9,
                'post_id' => 7,
                'meta_key' => '_edit_lock',
                'meta_value' => '1689593625:1',
            ),
            9 => 
            array (
                'meta_id' => 10,
                'post_id' => 9,
                'meta_key' => '_edit_last',
                'meta_value' => '1',
            ),
            10 => 
            array (
                'meta_id' => 11,
                'post_id' => 9,
                'meta_key' => '_edit_lock',
                'meta_value' => '1689593992:1',
            ),
            11 => 
            array (
                'meta_id' => 12,
                'post_id' => 9,
                'meta_key' => '_wp_page_template',
                'meta_value' => 'default',
            ),
            12 => 
            array (
                'meta_id' => 13,
                'post_id' => 12,
                'meta_key' => '_edit_last',
                'meta_value' => '1',
            ),
            13 => 
            array (
                'meta_id' => 14,
                'post_id' => 12,
                'meta_key' => '_edit_lock',
                'meta_value' => '1689593980:1',
            ),
            14 => 
            array (
                'meta_id' => 15,
                'post_id' => 9,
                'meta_key' => 'header',
                'meta_value' => 'Test Header',
            ),
            15 => 
            array (
                'meta_id' => 16,
                'post_id' => 9,
                'meta_key' => '_header',
                'meta_value' => 'field_64b528c20ec5c',
            ),
            16 => 
            array (
                'meta_id' => 17,
                'post_id' => 9,
                'meta_key' => 'description',
                'meta_value' => 'Test Description',
            ),
            17 => 
            array (
                'meta_id' => 18,
                'post_id' => 9,
                'meta_key' => '_description',
                'meta_value' => 'field_64b528f90ec5d',
            ),
            18 => 
            array (
                'meta_id' => 19,
                'post_id' => 15,
                'meta_key' => 'header',
                'meta_value' => 'Test Header',
            ),
            19 => 
            array (
                'meta_id' => 20,
                'post_id' => 15,
                'meta_key' => '_header',
                'meta_value' => 'field_64b528c20ec5c',
            ),
            20 => 
            array (
                'meta_id' => 21,
                'post_id' => 15,
                'meta_key' => 'description',
                'meta_value' => 'Test Description',
            ),
            21 => 
            array (
                'meta_id' => 22,
                'post_id' => 15,
                'meta_key' => '_description',
                'meta_value' => 'field_64b528f90ec5d',
            ),
        ));
        
        
    }
}