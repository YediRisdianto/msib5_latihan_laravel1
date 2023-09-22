<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desc1 = 'Selamat datang di halaman profil saya! Nama saya Yedi Risdianto dan saya adalah seorang mahasiswa yang sangat
        antusias tentang dunia pengembangan web. Saat ini, saya sedang memfokuskan diri untuk menjadi seorang Full Stack
        Web Developer dengan spesialisasi dalam penggunaan Laravel di PT. Gits.id';

        $desc2 = 'Saya percaya bahwa teknologi web adalah salah satu kekuatan paling kuat dalam transformasi dunia kita. Dengan
        memahami teknologi ini, saya ingin menciptakan solusi inovatif yang dapat membuat kehidupan lebih baik dan lebih
        efisien.';

        $desc3 = 'Selama perjalanan saya sebagai mahasiswa, saya telah memperoleh pemahaman tentang pemrograman web,
        termasuk HTML, CSS, JavaScript, dan banyak lagi. Saya juga telah memulai eksplorasi lebih dalam dalam
        pengembangan aplikasi web dengan menggunakan kerangka kerja Laravel, yang menawarkan alat yang bagus untuk
        membangun aplikasi web yang canggih dan aman.';

        $data['desc1'] = $desc1;
        $data['desc2'] = $desc2;
        $data['desc3'] = $desc3;

        return view('dashboard/index', $data);
    }

}
