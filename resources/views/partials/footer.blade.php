<footer>
    <section>
        <div>
            <ul>
                <li><h2>dc comics</h2></li>
                @foreach ($dcComicsLinks as $dcLink)
                <li>
                    <a href="#">{{$dcLink}}</a>
                </li>
                @endforeach
            </ul>
            <ul>
                <li><h2>shop</h2></li>
                @foreach ($shopLinks as $shopLink)
                <li>
                    <a href="#">{{$shopLink}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div>
            <ul>
                <li><h2>dc</h2></li>
                @foreach ($dcLinks as $dcLink)
                <li>
                    <a href="#">{{$dcLink}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div>
            <ul>
                <li><h2>sites</h2></li>
                @foreach ($sitesLinks as $siteLink)
                <li>
                    <a href="#">{{$siteLink}}</a>
                </li>
                @endforeach
            </ul>
        </div>
        <div class="dc-logo">
            <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="logo-dc">
        </div>
    </section>

    <nav>
        <div class="footer-nav">
            <button>
                SIGN-UP NOW!
            </button>
            <ul class="icons">
                <li >
                    <h2 id="follow">Follow Us</h2>
                </li>
                <li>
                    <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="facebook">
                </li>
                <li>
                    <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="twitter">
                </li>
                <li>
                    <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="youtube">
                </li>
                <li>
                    <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="pinterest">
                </li>
                <li>
                    <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="periscope">
                </li>
            </ul>
        </div>
    </nav>
</footer>
