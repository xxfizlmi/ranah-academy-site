<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController;

class HomeController extends PageController
{
    public function index()
    {
        $data = $this->siteData('Ranah Academy', 'Belajar Tanpa Batas', 'Tingkatkan keterampilan melalui kelas online, mentor profesional, dan sertifikat yang membantu perkembangan kariermu.');

        $data['hero'] = [
            'badge' => 'Selamat Datang di Ranah Academy',
            'title' => 'Belajar Tanpa Batas',
            'highlight' => 'Bersama Ranah Academy',
            'description' => 'Tingkatkan keterampilan melalui kelas online, mentor profesional, dan sertifikat yang membantu perkembangan kariermu.',
            'primary_cta' => ['label' => 'Mulai Belajar', 'url' => '/courses'],
            'secondary_cta' => ['label' => 'Tentang Kami', 'url' => '/about'],
        ];
        $data['stats'] = [
            ['value' => '10K+', 'label' => 'Peserta'],
            ['value' => '150+', 'label' => 'Kelas'],
            ['value' => '30+', 'label' => 'Mentor'],
        ];
        $data['features'] = [
            ['title' => 'Pembelajaran Interaktif', 'description' => 'Materi yang disusun sistematis dan mudah dipahami untuk semua level.'],
            ['title' => 'Mentor Berpengalaman', 'description' => 'Dapatkan dukungan dari tenaga ahli yang siap membimbing perjalanan belajarmu.'],
            ['title' => 'Sertifikat Resmi', 'description' => 'Tingkatkan CV dan portofolio dengan sertifikat yang diakui.'],
        ];
        $data['programs'] = [
            ['title' => 'Kelas Online', 'description' => 'Belajar fleksibel kapan pun dan di mana pun melalui platform yang ramah pengguna.', 'badge' => 'Populer'],
            ['title' => 'Program Intensif', 'description' => 'Jalur belajar terarah untuk mempercepat perkembangan skill secara praktis.', 'badge' => 'Baru'],
            ['title' => 'Komunitas Belajar', 'description' => 'Bergabung dengan komunitas supportif untuk berbagi pengalaman dan motivasi.', 'badge' => 'Komunitas'],
        ];
        $data['cta'] = [
            'title' => 'Siap memulai perjalanan belajar yang lebih baik?',
            'description' => 'Daftar sekarang dan bangun skill impianmu bersama Ranah Academy.',
            'button' => ['label' => 'Gabung Sekarang', 'url' => '/contact'],
        ];

        return view('index', $data);
    }
}
