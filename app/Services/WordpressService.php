<?php

namespace App\Services;

use Corcel\Model\Meta\PostMeta;
use Corcel\Model\Page;

/**
 *
 */
class WordpressService
{
    /**
     * Gets all data based on it's WP Admin page name
     *
     * @param string $page_name Page Name found on WP Admin
     * @return array
     */
    public function getPageData(string $page_name): array
    {
        $data = [];

        // Get Page ID and all its data from WordPress
        $page = Page::select('ID')->published()->where('post_title', $page_name)->first();
        $page_data = PostMeta::where('post_id', $page->ID)->where('meta_key', 'not like', '\_%')->pluck('meta_value', 'meta_key')->toArray();

        // Create a mapping of all the data (except files) which are present related to that page.
        $search_ids = [];
        foreach ($page_data as $meta_key => $meta_value) {
            if (is_numeric($meta_value)) {
                $search_ids[$meta_key] = $meta_value;
            }
        }

        // Get all files & image alt data if any related to that page
        $individual_file_data = PostMeta::whereIn('post_id', $search_ids)->where('meta_key', '_wp_attached_file')->pluck('meta_value', 'post_id');
        $individual_alt_data = PostMeta::whereIn('post_id', $search_ids)->where('meta_key', '_wp_attachment_image_alt')->pluck('meta_value', 'post_id');
        foreach ($search_ids as $meta_key => $id) {
            $page_data[$meta_key] = [];
            $page_data[$meta_key]['link'] = config('app.url') . '/cms/wp-content/uploads/' . $individual_file_data->get($id);
            $page_data[$meta_key]['alt'] = $individual_alt_data->get($id);
        }

        $data['id'] = $page->ID;
        $data['page_data'] = $page_data;

        return $data;
    }
}
