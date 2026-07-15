<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PageController;

class CoursesController extends PageController
{
    public function index()
    {
        $data = $this->siteData('Courses - Ranah Academy', 'Kelas Pilihan', 'Temukan kelas yang sesuai dengan minat dan kebutuhanmu, mulai dari dasar hingga level lanjutan.', [
            ['title' => 'UI/UX Design', 'description' => 'Belajar merancang pengalaman pengguna yang menarik dan fungsional.'],
            ['title' => 'Web Development', 'description' => 'Bangun website modern dengan teknologi yang relevan di industri.'],
            ['title' => 'Digital Marketing', 'description' => 'Pahami strategi digital untuk memperkuat brand dan bisnis.'],
        ]);

        return view('courses', $data);
    }
}
