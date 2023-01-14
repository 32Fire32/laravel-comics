<header>
    <div class="ms-container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dcLogo" />
        </div>
        <nav>
            <ul class="nav_header">
                @foreach ($links as $link)
                    <li>{{ $link }}</li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
