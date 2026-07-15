<?php

it('displays a complete and polished home page', function () {
    $response = $this->get('/');

    $response->assertStatus(200)
        ->assertSee('Kenapa Memilih Ranah Academy')
        ->assertSee('Program Unggulan')
        ->assertSee('Mulai Belajar');
});

it('loads all main menu pages successfully', function () {
    $pages = [
        ['path' => '/about', 'text' => 'Tentang Ranah Academy'],
        ['path' => '/courses', 'text' => 'Kelas Pilihan'],
        ['path' => '/mentors', 'text' => 'Mentor Profesional'],
        ['path' => '/articles', 'text' => 'Artikel & Insight'],
        ['path' => '/events', 'text' => 'Event & Workshop'],
        ['path' => '/gallery', 'text' => 'Galeri Kegiatan'],
        ['path' => '/contact', 'text' => 'Hubungi Kami'],
    ];

    foreach ($pages as $page) {
        $this->get($page['path'])
            ->assertStatus(200)
            ->assertSee($page['text']);
    }
});
