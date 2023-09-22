@extends('component.app')

@section('content')
    <div class="profile mt-3">
        <header>
            <h1>Biodata Saya</h1>
        </header>
        <section class="profile">
            <img src="{{ asset('img/profile.png') }}" alt="Foto Profil">
            <h2>{{ $name }}</h2>
            <p>Mahasiswa</p>
        </section>
        <section class="details">
            <h2>Detail Biodata</h2>
            <ul>
                <li><strong>Nama :</strong> {{ $name }}</li>
                <li><strong>Tanggal Lahir :</strong> {{ $ttl }}</li>
                <li><strong>Alamat :</strong> {{ $alamat }}</li>
                <li><strong>Email :</strong> {{ $email }}</li>
                <li><strong>Telepon :</strong> {{ $telp }}</li>
            </ul>
        </section>
    </div>
@endsection
