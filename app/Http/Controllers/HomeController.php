<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Ranah Academy',
            'headers' => [
                ['url' => '/', 'name' => 'Home'],
                ['url' => '/about', 'name' => 'About Us'],
                ['url' => '/courses', 'name' => 'Courses'],
                ['url' => '/mentors', 'name' => 'Mentors'],
                ['url' => '/articles', 'name' => 'Articles'],
                ['url' => '/events', 'name' => 'Events'],
                ['url' => '/gallery', 'name' => 'Gallery'],
                ['url' => '/contact', 'name' => 'Contact'],
            ],
        ];
        return view('index', $data);
    }
}
