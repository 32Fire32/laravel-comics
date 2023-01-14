<footer>
    <nav class="info-nav">
        <div class="ms-container">
            @foreach ($footshops as $footshop)
                <div class="shop-link">
                    <div class="image">
                        <img src="{{ Vite::asset($footshop['img']) }}" alt="{{ $footshop['text'] }}">
                    </div>
                    <h3>{{ $footshop['text'] }}</h3>
                </div>
            @endforeach
        </div>
    </nav>
    <div class="footer-bg">
        <div class="ms-container">
            <div class="footer-links">
                <div class="links">
                    <h3>DC COMICS</h3>
                    <ul>
                        @foreach ($footlinks['dcComics'] as $dcComic)
                            <li>
                                <a href="#">{{ $dcComic }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <h3>SHOP</h3>
                    <ul>
                        @foreach ($footlinks['shops'] as $shop)
                            <li>
                                <a href="#">{{ $shop }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="links">
                    <h3>DC</h3>
                    <ul>
                        @foreach ($footlinks['others'] as $other)
                            <li>
                                <a href="#">{{ $other }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="links">
                    <h3>SITES</h3>
                    <ul>
                        @foreach ($footlinks['sites'] as $site)
                            <li>
                                <a href="#">{{ $site }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="logoBg">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logobg" />
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="ms-container">
            <button>SIGN-UP NOW!</button>
            <div class="social">
                <h3>FOLLOW US</h3>
                <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="face" />
                <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twit" />
                <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}"alt="you" />
                <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pin" />
                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="peri" />
            </div>
        </div>
    </div>
</footer>
