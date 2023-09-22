<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniversityController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $title = 'Profil Universitas Muhammadiyah Cirebon';
        $desc1 = 'Universitas Muhammadiyah Cirebon (UMC) merupakan lembaga pendidikan tinggi yang didirikan sebagai perwujudan idealisme dan komitmen warga Muhammadiyah Cirebon untuk terus beramal shaleh, khususnya dalam bidang peningkatan mutu kehidupan masyarakat. UMC berdiri pada tahun 1999 dan terletak di Kota Cirebon, Jawa Barat, Indonesia.';
        $desc2 = 'UMC memiliki beragam program studi yang diselenggarakan di bawah dua tingkatan pendidikan, yaitu Program Diploma 3 (D-3) dan Program Sarjana (S1). Selain itu, UMC juga menawarkan Program Profesi yang bertujuan untuk menghasilkan lulusan yang siap bekerja di bidang yang spesifik.';
        $desc3 = 'UMC berkomitmen untuk memberikan pendidikan berkualitas tinggi yang berlandaskan nilai-nilai Islam dan menjunjung tinggi etika serta moralitas. Melalui pendekatan akademik yang holistik, UMC bertujuan untuk menghasilkan lulusan yang memiliki kompetensi akademik dan keterampilan praktis yang dibutuhkan dalam dunia kerja.';

        $data['title'] = $title;
        $data['desc1'] = $desc1;
        $data['desc2'] = $desc2;
        $data['desc3'] = $desc3;


        return view('university/index', $data);
    }
}
