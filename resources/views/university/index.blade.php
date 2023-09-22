@extends('component.app')

@section('content')
    <div class="univ mt-5">
        <header>
            <img src="{{asset('img/umc.png')}}" alt="">
        </header>
        <section class="content">
            <h2>{{$title}}</h2>
            <p>{{$desc1}}</p>
            <p>{{$desc2}}</p>
            <p>{{$desc3}}
            </p>
        </section>
    </div>
@endsection
