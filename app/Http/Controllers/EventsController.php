<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController;

class EventsController extends PageController
{
    public function index()
    {
        $data = $this->siteData('Events - Ranah Academy', 'Event & Workshop', 'Ikuti event, webinar, dan workshop yang dirancang untuk memperluas wawasan dan koneksi.', [
            ['title' => 'Webinar Career Growth', 'description' => 'Diskusi santai tentang peluang dan strategi karier di industri digital.'],
            ['title' => 'Workshop Product Design', 'description' => 'Praktik langsung untuk mengasah kemampuan desain produk.'],
            ['title' => 'Community Meetup', 'description' => 'Bertemu dengan sesama pembelajar dan profesional untuk saling berbagi insight.'],
        ]);

        return view('events', $data);
    }
}
