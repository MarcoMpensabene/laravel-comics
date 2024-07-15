{{--! Prendi il layout ed utilizzalo come struttura  --}}
@extends('layouts.app')

@section('page-title' , 'Home')

@section('main-content')

    <main>
         <h1>Content goes here !</h1>

        <section class="merch-section">
            @foreach ($merchList as $item)
                <div class="merch">
                    <div>
                        <img src="{{Vite::asset($item["src"])}}" alt="{{$item["content"]}}">
                        <p>{{$item["content"]}}</p>
                    </div>
                </div>
            @endforeach

        </section>
    </main>


@endsection
