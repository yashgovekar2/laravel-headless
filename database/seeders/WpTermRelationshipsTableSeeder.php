<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WpTermRelationshipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wp_term_relationships')->delete();
        
        \DB::table('wp_term_relationships')->insert(array (
            0 => 
            array (
                'object_id' => 1,
                'term_taxonomy_id' => 1,
                'term_order' => 0,
            ),
            1 => 
            array (
                'object_id' => 8,
                'term_taxonomy_id' => 2,
                'term_order' => 0,
            ),
        ));
        
        
    }
}