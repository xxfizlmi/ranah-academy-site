<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController;

class AboutController extends PageController
{
    public function index()
    {
        $data = $this->siteData('About Us - Ranah Academy', 'Tentang Ranah Academy', 'Kami hadir untuk membantu setiap orang belajar dengan metode yang modern, terarah, dan menyenangkan.', [
            ['title' => 'Visi', 'description' => 'Menjadi platform pendidikan yang memudahkan siapa pun mengembangkan skill secara konsisten.'],
            ['title' => 'Misi', 'description' => 'Menyediakan akses belajar berkualitas dengan materi yang relevan dan mentor yang suportif.'],
            ['title' => 'Nilai', 'description' => 'Kualitas, kolaborasi, dan perkembangan berkelanjutan menjadi fondasi utama kami.'],
        ]);

        return view('about', $data);
    }
}
