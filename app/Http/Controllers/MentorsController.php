<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController;

class MentorsController extends PageController
{
    public function index()
    {
        $data = $this->siteData('Mentors - Ranah Academy', 'Mentor Profesional', 'Bersama mentor berpengalaman, setiap perjalanan belajar jadi lebih terarah dan inspiratif.', [
            ['title' => 'Ayu Pratama', 'description' => 'Spesialis UI/UX dan desain produk digital.'],
            ['title' => 'Rian Hidayat', 'description' => 'Ahli pengembangan web modern dan sistem backend.'],
            ['title' => 'Nadia Putri', 'description' => 'Mentor digital marketing dan strategi konten.'],
        ]);

        return view('mentors', $data);
    }
}
