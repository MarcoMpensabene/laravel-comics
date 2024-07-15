{{--! Prendi il layout ed utilizzalo come struttura  --}}
@extends('layouts.app')

@section('page-title' , 'Home')

@section('main-content')

    <main>
        <main>
            <section class="jumbo-tron">
            </section>

            <section class="articles-list">
                <div>
                    @foreach ($data as $comic)
                    <article >
                        <img src="{{$comic["thumb"]}}" alt="">
                        <h4>
                            {{$comic["series"]}}
                        </h4>
                        <h5>
                            {{$comic["price"]}}
                        </h6>
                    </article>
                    @endforeach

                </div>
            </section>
            <div>
                <button>Load More</button>
            </div>
        </main>

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
