<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $name = 'Yedi Risdianto';
        $ttl = '5 April 2001';
        $alamat = 'Jl. Raya Desa Garahaji, Kuningan';
        $email = 'yedi.risdianto1@gmail.com';
        $telp = '(+62) 857-9884-4990';

        $data['name'] = $name;
        $data['ttl'] = $ttl;
        $data['alamat'] = $alamat;
        $data['email'] = $email;
        $data['telp'] = $telp;

        return view('profile/index', $data);
    }
}
