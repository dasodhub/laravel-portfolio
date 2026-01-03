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

    public function projects() {
        $projects = [
            [
                'title' => 'Portfolio Website',
                'description' => 'A personal portfolio website built with Laravel.'
            ],
            [
                'title' => 'E-commerce Platform',
                'description' => 'An online store application with shopping cart functionality.'
            ],
            [
                'title' => 'Blog System',
                'description' => 'A blogging platform with user authentication and CRUD features.'
            ]
        ];
        return view('pages.projects', ['projects' => $projects]);
    }
}
