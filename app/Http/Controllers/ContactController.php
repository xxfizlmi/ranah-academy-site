<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController;

class ContactController extends PageController
{
    public function index()
    {
        $data = $this->siteData('Contact - Ranah Academy', 'Hubungi Kami', 'Kami siap membantu dan menjawab pertanyaanmu seputar program belajar di Ranah Academy.', [
            ['title' => 'Email', 'description' => 'hello@ranahacademy.com'],
            ['title' => 'WhatsApp', 'description' => '+62 812-3456-7890'],
            ['title' => 'Alamat', 'description' => 'Bandung, Indonesia'],
        ]);

        return view('contact', $data);
    }
}
