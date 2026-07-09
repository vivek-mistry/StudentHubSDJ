<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\View\View;

class ReadmeController extends Controller
{
    public function index(): View
    {
        $markdown = file_get_contents(base_path('README.md'));

        return view('readme', [
            'content' => Str::markdown($markdown, [
                'html_input' => 'strip',
                'allow_unsafe_links' => false,
            ]),
        ]);
    }
}
