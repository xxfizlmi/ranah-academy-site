<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController;

class GalleryController extends PageController
{
    public function index()
    {
        $data = $this->siteData('Gallery - Ranah Academy', 'Galeri Kegiatan', 'Lihat momen belajar, kegiatan komunitas, dan pengalaman seru di Ranah Academy.', [
            ['title' => 'Kelas Online', 'description' => 'Suasana kelas yang interaktif dan penuh dukungan.'],
            ['title' => 'Workshop Bersama', 'description' => 'Kegiatan hands-on yang memperkaya pengalaman belajar.'],
            ['title' => 'Komunitas Aktif', 'description' => 'Kumpulan momen kebersamaan antar peserta dan mentor.'],
        ]);

        return view('gallery', $data);
    }
}
