<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\WordpressService;
use Inertia\Inertia;
use Inertia\Response;

class PageController extends Controller
{
    private WordpressService $wpSvc;

    /**
     * @param WordpressService $wpSvc
     */
    public function __construct(WordpressService $wpSvc)
    {
        $this->wpSvc = $wpSvc;
    }

    public function home(): Response
    {
        $data = $this->wpSvc->getPageData('HomePage');

        return Inertia::render('Home', [
            'pageData' => $data['page_data'],
        ]);
    }
}
