<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\View\View;

class PagesController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $pages = Page::latest()->paginate(5);

        return view('pages.landing', compact('pages'));
    }
}
