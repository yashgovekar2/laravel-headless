<?php

namespace App\Services;

use Corcel\Model\Meta\PostMeta;
use Corcel\Model\Page;
use Corcel\Model\Post;

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

        $page = Page::select('ID')->published()->where('post_title', $page_name)->first();
        $page_data = PostMeta::where('post_id', $page->ID)->where('meta_key', 'not like', '\_%')->pluck('meta_value', 'meta_key')->toArray();

        $search_ids = [];
        foreach ($page_data as $meta_key => $meta_value) {
            if (is_numeric($meta_value)) {
                $search_ids[$meta_key] = $meta_value;
            }
        }

        $individual_file_data = PostMeta::whereIn('post_id', $search_ids)->where('meta_key', '_wp_attached_file')->pluck('meta_value', 'post_id');
        $individual_alt_data = PostMeta::whereIn('post_id', $search_ids)->where('meta_key', '_wp_attachment_image_alt')->pluck('meta_value', 'post_id');
        foreach ($search_ids as $meta_key => $id) {
            $page_data[$meta_key] = [];
            $page_data[$meta_key]['link'] = config('app.url').'/cms/wp-content/uploads/'.$individual_file_data->get($id);
            $page_data[$meta_key]['alt'] = $individual_alt_data->get($id);
        }

        $data['id'] = $page->ID;
        $data['page_data'] = $page_data;

        return $data;
    }
}
