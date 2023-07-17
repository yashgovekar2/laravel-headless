<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WpUsermetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('wp_usermeta')->delete();
        
        \DB::table('wp_usermeta')->insert(array (
            0 => 
            array (
                'umeta_id' => 1,
                'user_id' => 1,
                'meta_key' => 'nickname',
                'meta_value' => 'headred',
            ),
            1 => 
            array (
                'umeta_id' => 2,
                'user_id' => 1,
                'meta_key' => 'first_name',
                'meta_value' => '',
            ),
            2 => 
            array (
                'umeta_id' => 3,
                'user_id' => 1,
                'meta_key' => 'last_name',
                'meta_value' => '',
            ),
            3 => 
            array (
                'umeta_id' => 4,
                'user_id' => 1,
                'meta_key' => 'description',
                'meta_value' => '',
            ),
            4 => 
            array (
                'umeta_id' => 5,
                'user_id' => 1,
                'meta_key' => 'rich_editing',
                'meta_value' => 'true',
            ),
            5 => 
            array (
                'umeta_id' => 6,
                'user_id' => 1,
                'meta_key' => 'syntax_highlighting',
                'meta_value' => 'true',
            ),
            6 => 
            array (
                'umeta_id' => 7,
                'user_id' => 1,
                'meta_key' => 'comment_shortcuts',
                'meta_value' => 'false',
            ),
            7 => 
            array (
                'umeta_id' => 8,
                'user_id' => 1,
                'meta_key' => 'admin_color',
                'meta_value' => 'fresh',
            ),
            8 => 
            array (
                'umeta_id' => 9,
                'user_id' => 1,
                'meta_key' => 'use_ssl',
                'meta_value' => '0',
            ),
            9 => 
            array (
                'umeta_id' => 10,
                'user_id' => 1,
                'meta_key' => 'show_admin_bar_front',
                'meta_value' => 'true',
            ),
            10 => 
            array (
                'umeta_id' => 11,
                'user_id' => 1,
                'meta_key' => 'locale',
                'meta_value' => '',
            ),
            11 => 
            array (
                'umeta_id' => 12,
                'user_id' => 1,
                'meta_key' => 'wp_capabilities',
                'meta_value' => 'a:1:{s:13:"administrator";b:1;}',
            ),
            12 => 
            array (
                'umeta_id' => 13,
                'user_id' => 1,
                'meta_key' => 'wp_user_level',
                'meta_value' => '10',
            ),
            13 => 
            array (
                'umeta_id' => 14,
                'user_id' => 1,
                'meta_key' => 'dismissed_wp_pointers',
                'meta_value' => '',
            ),
            14 => 
            array (
                'umeta_id' => 15,
                'user_id' => 1,
                'meta_key' => 'show_welcome_panel',
                'meta_value' => '0',
            ),
            15 => 
            array (
                'umeta_id' => 16,
                'user_id' => 1,
                'meta_key' => 'session_tokens',
            'meta_value' => 'a:1:{s:64:"d3fa804daf096695c722f36b6f3892b6011a924a5e030cc5a2189955204de778";a:4:{s:10:"expiration";i:1689766510;s:2:"ip";s:9:"127.0.0.1";s:2:"ua";s:111:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36";s:5:"login";i:1689593710;}}',
            ),
            16 => 
            array (
                'umeta_id' => 17,
                'user_id' => 1,
                'meta_key' => 'wp_dashboard_quick_press_last_post_id',
                'meta_value' => '4',
            ),
            17 => 
            array (
                'umeta_id' => 18,
                'user_id' => 1,
                'meta_key' => 'community-events-location',
                'meta_value' => 'a:1:{s:2:"ip";s:9:"127.0.0.0";}',
            ),
            18 => 
            array (
                'umeta_id' => 19,
                'user_id' => 1,
                'meta_key' => 'wp_persisted_preferences',
                'meta_value' => 'a:2:{s:14:"core/edit-post";a:4:{s:26:"isComplementaryAreaVisible";b:1;s:12:"welcomeGuide";b:0;s:10:"openPanels";a:1:{i:0;s:11:"post-status";}s:10:"editorMode";s:4:"text";}s:9:"_modified";s:24:"2023-07-17T11:36:03.389Z";}',
            ),
        ));
        
        
    }
}