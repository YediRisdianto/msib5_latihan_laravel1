@extends('component.app')

@section('content')
    <section class="about mt-5">
        <h2 class="mb-4">Tentang Saya</h2>
        <img src="{{ asset('img/home.jpg') }}" class="img-fluid rounded-circle" alt="Foto Profil">
        <p>{{ $desc1 }}</p>
        <p>{{ $desc2 }}</p>
        <p>{{ $desc3 }}</p>
    </section>
@endsection
