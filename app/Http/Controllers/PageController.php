<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about() {
        $data = [
            'name' => 'John Oshoke',
            'skills' => ['Laravel', 'PHP', 'Git', 'JavaScript', 'HTML', 'CSS']
        ];
        return view('pages.about', $data);
    }

    public function home() {
        return view('pages.home');
    }

    public function contact() {
        return view('pages.contact');
    }
}
