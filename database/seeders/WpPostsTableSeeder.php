<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WpPostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('wp_posts')->delete();

        \DB::table('wp_posts')->insert(array (
            0 =>
            array (
                'ID' => 1,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:34:00',
                'post_date_gmt' => '2023-07-17 11:34:00',
                'post_content' => '<!-- wp:paragraph -->
<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>
<!-- /wp:paragraph -->',
                'post_title' => 'Hello world!',
                'post_excerpt' => '',
                'post_status' => 'publish',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => '',
                'post_name' => 'hello-world',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:34:00',
                'post_modified_gmt' => '2023-07-17 11:34:00',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://127.0.0.1:8000/cms/?p=1',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => '',
                'comment_count' => 1,
            ),
            1 =>
            array (
                'ID' => 2,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:34:00',
                'post_date_gmt' => '2023-07-17 11:34:00',
                'post_content' => '<!-- wp:paragraph -->
<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>...or something like this:</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>As a new WordPress user, you should go to <a href="http://127.0.0.1:8000/cms/wp-admin/">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>
<!-- /wp:paragraph -->',
                'post_title' => 'Sample Page',
                'post_excerpt' => '',
                'post_status' => 'trash',
                'comment_status' => 'closed',
                'ping_status' => 'open',
                'post_password' => '',
                'post_name' => 'sample-page__trashed',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:35:36',
                'post_modified_gmt' => '2023-07-17 11:35:36',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://127.0.0.1:8000/cms/?page_id=2',
                'menu_order' => 0,
                'post_type' => 'page',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            2 =>
            array (
                'ID' => 3,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:34:00',
                'post_date_gmt' => '2023-07-17 11:34:00',
            'post_content' => '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>Our website address is: http://127.0.0.1:8000/cms.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Comments</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Media</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cookies</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Embedded content from other websites</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where your data is sent</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph -->',
                'post_title' => 'Privacy Policy',
                'post_excerpt' => '',
                'post_status' => 'trash',
                'comment_status' => 'closed',
                'ping_status' => 'open',
                'post_password' => '',
                'post_name' => 'privacy-policy__trashed',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:35:35',
                'post_modified_gmt' => '2023-07-17 11:35:35',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://127.0.0.1:8000/cms/?page_id=3',
                'menu_order' => 0,
                'post_type' => 'page',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            3 =>
            array (
                'ID' => 4,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:35:11',
                'post_date_gmt' => null,
                'post_content' => '',
                'post_title' => 'Auto Draft',
                'post_excerpt' => '',
                'post_status' => 'auto-draft',
                'comment_status' => 'open',
                'ping_status' => 'open',
                'post_password' => '',
                'post_name' => '',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:35:11',
                'post_modified_gmt' => null,
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://127.0.0.1:8000/cms/?p=4',
                'menu_order' => 0,
                'post_type' => 'post',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            4 =>
            array (
                'ID' => 5,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:35:35',
                'post_date_gmt' => '2023-07-17 11:35:35',
            'post_content' => '<!-- wp:heading --><h2>Who we are</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>Our website address is: http://127.0.0.1:8000/cms.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Comments</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Media</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Cookies</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Embedded content from other websites</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Who we share your data with</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>How long we retain your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>What rights you have over your data</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><!-- /wp:paragraph --><!-- wp:heading --><h2>Where your data is sent</h2><!-- /wp:heading --><!-- wp:paragraph --><p><strong class="privacy-policy-tutorial">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p><!-- /wp:paragraph -->',
                'post_title' => 'Privacy Policy',
                'post_excerpt' => '',
                'post_status' => 'inherit',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => '',
                'post_name' => '3-revision-v1',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:35:35',
                'post_modified_gmt' => '2023-07-17 11:35:35',
                'post_content_filtered' => '',
                'post_parent' => 3,
                'guid' => 'http://127.0.0.1:8000/cms/?p=5',
                'menu_order' => 0,
                'post_type' => 'revision',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            5 =>
            array (
                'ID' => 6,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:35:36',
                'post_date_gmt' => '2023-07-17 11:35:36',
                'post_content' => '<!-- wp:paragraph -->
<p>This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><p>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</p></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>...or something like this:</p>
<!-- /wp:paragraph -->

<!-- wp:quote -->
<blockquote class="wp-block-quote"><p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p></blockquote>
<!-- /wp:quote -->

<!-- wp:paragraph -->
<p>As a new WordPress user, you should go to <a href="http://127.0.0.1:8000/cms/wp-admin/">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>
<!-- /wp:paragraph -->',
                'post_title' => 'Sample Page',
                'post_excerpt' => '',
                'post_status' => 'inherit',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => '',
                'post_name' => '2-revision-v1',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:35:36',
                'post_modified_gmt' => '2023-07-17 11:35:36',
                'post_content_filtered' => '',
                'post_parent' => 2,
                'guid' => 'http://127.0.0.1:8000/cms/?p=6',
                'menu_order' => 0,
                'post_type' => 'revision',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            6 =>
            array (
                'ID' => 7,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:35:38',
                'post_date_gmt' => null,
                'post_content' => '',
                'post_title' => 'Auto Draft',
                'post_excerpt' => '',
                'post_status' => 'auto-draft',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => '',
                'post_name' => '',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:35:38',
                'post_modified_gmt' => null,
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://127.0.0.1:8000/cms/?page_id=7',
                'menu_order' => 0,
                'post_type' => 'page',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            7 =>
            array (
                'ID' => 8,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:35:43',
                'post_date_gmt' => '2023-07-17 11:35:43',
                'post_content' => '{"version": 2, "isGlobalStylesUserThemeJSON": true }',
                'post_title' => 'Custom Styles',
                'post_excerpt' => '',
                'post_status' => 'publish',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => '',
                'post_name' => 'wp-global-styles-twentytwentythree',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:35:43',
                'post_modified_gmt' => '2023-07-17 11:35:43',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://127.0.0.1:8000/cms/?p=8',
                'menu_order' => 0,
                'post_type' => 'wp_global_styles',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            8 =>
            array (
                'ID' => 9,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:37:07',
                'post_date_gmt' => '2023-07-17 11:37:07',
                'post_content' => '',
                'post_title' => 'HomePage',
                'post_excerpt' => '',
                'post_status' => 'publish',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => '',
                'post_name' => 'homepage',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:42:14',
                'post_modified_gmt' => '2023-07-17 11:42:14',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://127.0.0.1:8000/cms/?page_id=9',
                'menu_order' => 0,
                'post_type' => 'page',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            9 =>
            array (
                'ID' => 10,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:37:07',
                'post_date_gmt' => '2023-07-17 11:37:07',
                'post_content' => '',
                'post_title' => 'HomePage',
                'post_excerpt' => '',
                'post_status' => 'inherit',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => '',
                'post_name' => '9-revision-v1',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:37:07',
                'post_modified_gmt' => '2023-07-17 11:37:07',
                'post_content_filtered' => '',
                'post_parent' => 9,
                'guid' => 'http://127.0.0.1:8000/cms/?p=10',
                'menu_order' => 0,
                'post_type' => 'revision',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            10 =>
            array (
                'ID' => 11,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:37:10',
                'post_date_gmt' => '2023-07-17 11:37:10',
                'post_content' => '<!-- wp:page-list /-->',
                'post_title' => 'Navigation',
                'post_excerpt' => '',
                'post_status' => 'publish',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => '',
                'post_name' => 'navigation',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:37:10',
                'post_modified_gmt' => '2023-07-17 11:37:10',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://127.0.0.1:8000/cms/?p=11',
                'menu_order' => 0,
                'post_type' => 'wp_navigation',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            11 =>
            array (
                'ID' => 12,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:41:58',
                'post_date_gmt' => '2023-07-17 11:41:58',
                'post_content' => 'a:8:{s:8:"location";a:1:{i:0;a:1:{i:0;a:3:{s:5:"param";s:4:"page";s:8:"operator";s:2:"==";s:5:"value";s:1:"9";}}}s:8:"position";s:6:"normal";s:5:"style";s:7:"default";s:15:"label_placement";s:3:"top";s:21:"instruction_placement";s:5:"label";s:14:"hide_on_screen";s:0:"";s:11:"description";s:0:"";s:12:"show_in_rest";i:0;}',
                'post_title' => 'HomePage',
                'post_excerpt' => 'homepage',
                'post_status' => 'publish',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => '',
                'post_name' => 'group_64b528c22a66d',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:41:58',
                'post_modified_gmt' => '2023-07-17 11:41:58',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://127.0.0.1:8000/cms/?post_type=acf-field-group&#038;p=12',
                'menu_order' => 0,
                'post_type' => 'acf-field-group',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            12 =>
            array (
                'ID' => 13,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:41:58',
                'post_date_gmt' => '2023-07-17 11:41:58',
                'post_content' => 'a:11:{s:10:"aria-label";s:0:"";s:4:"type";s:4:"text";s:12:"instructions";s:0:"";s:8:"required";i:0;s:17:"conditional_logic";i:0;s:7:"wrapper";a:3:{s:5:"width";s:0:"";s:5:"class";s:0:"";s:2:"id";s:0:"";}s:13:"default_value";s:0:"";s:9:"maxlength";s:0:"";s:11:"placeholder";s:0:"";s:7:"prepend";s:0:"";s:6:"append";s:0:"";}',
                'post_title' => 'Header',
                'post_excerpt' => 'header',
                'post_status' => 'publish',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => '',
                'post_name' => 'field_64b528c20ec5c',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:41:58',
                'post_modified_gmt' => '2023-07-17 11:41:58',
                'post_content_filtered' => '',
                'post_parent' => 12,
                'guid' => 'http://127.0.0.1:8000/cms/?post_type=acf-field&p=13',
                'menu_order' => 0,
                'post_type' => 'acf-field',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            13 =>
            array (
                'ID' => 14,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:41:58',
                'post_date_gmt' => '2023-07-17 11:41:58',
                'post_content' => 'a:11:{s:10:"aria-label";s:0:"";s:4:"type";s:8:"textarea";s:12:"instructions";s:0:"";s:8:"required";i:0;s:17:"conditional_logic";i:0;s:7:"wrapper";a:3:{s:5:"width";s:0:"";s:5:"class";s:0:"";s:2:"id";s:0:"";}s:13:"default_value";s:0:"";s:9:"maxlength";s:0:"";s:4:"rows";s:0:"";s:11:"placeholder";s:0:"";s:9:"new_lines";s:0:"";}',
                'post_title' => 'Description',
                'post_excerpt' => 'description',
                'post_status' => 'publish',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => '',
                'post_name' => 'field_64b528f90ec5d',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:41:58',
                'post_modified_gmt' => '2023-07-17 11:41:58',
                'post_content_filtered' => '',
                'post_parent' => 12,
                'guid' => 'http://127.0.0.1:8000/cms/?post_type=acf-field&p=14',
                'menu_order' => 1,
                'post_type' => 'acf-field',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
            14 =>
            array (
                'ID' => 15,
                'post_author' => 1,
                'post_date' => '2023-07-17 11:42:14',
                'post_date_gmt' => '2023-07-17 11:42:14',
                'post_content' => '',
                'post_title' => 'HomePage',
                'post_excerpt' => '',
                'post_status' => 'inherit',
                'comment_status' => 'closed',
                'ping_status' => 'closed',
                'post_password' => '',
                'post_name' => '9-revision-v1',
                'to_ping' => '',
                'pinged' => '',
                'post_modified' => '2023-07-17 11:42:14',
                'post_modified_gmt' => '2023-07-17 11:42:14',
                'post_content_filtered' => '',
                'post_parent' => 9,
                'guid' => 'http://127.0.0.1:8000/cms/?p=15',
                'menu_order' => 0,
                'post_type' => 'revision',
                'post_mime_type' => '',
                'comment_count' => 0,
            ),
        ));


    }
}
