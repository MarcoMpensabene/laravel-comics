<header>
    <nav>

        <div class="header-logo">
            <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="DC-Logo">
        </div>
        <ul>
            @foreach ($listLink as $link)
                <li>
                    <a href="{{$link["route"]}}">{{$link["name"]}}</a>
                </li>
            @endforeach

        </ul>
        </nav>
</header>
