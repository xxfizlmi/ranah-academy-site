<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController;

class ArticlesController extends PageController
{
    public function index()
    {
        $data = $this->siteData('Articles - Ranah Academy', 'Artikel & Insight', 'Jelajahi artikel, tips, dan wawasan seputar teknologi, karier, dan pengembangan diri.', [
            ['title' => 'Cara Menyusun Portofolio', 'description' => 'Panduan sederhana untuk menampilkan karya dan pengalaman dengan lebih menarik.'],
            ['title' => 'Belajar Skill Baru di Era AI', 'description' => 'Kenali cara memanfaatkan teknologi AI untuk mempercepat pertumbuhan karier.'],
            ['title' => 'Tips Produktivitas Belajar', 'description' => 'Strategi agar belajar tetap konsisten tanpa merasa terbebani.'],
        ]);

        return view('articles', $data);
    }
}
