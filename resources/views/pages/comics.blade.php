{{--! Prendi il layout ed utilizzalo come struttura  --}}
@extends('layouts.app')

@section('page-title' , 'Comics')

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


        </section>
    </main>


@endsection
