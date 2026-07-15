<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    protected function siteData(string $title, string $headline, string $description, array $items = []): array
    {
        return [
            'title' => $title,
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
            'page' => [
                'headline' => $headline,
                'description' => $description,
                'items' => $items,
            ],
        ];
    }
}
