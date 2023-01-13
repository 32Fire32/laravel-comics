@extends('layouts.main')

@section('page-content')
    <div class="content">
        <div class="jumbo">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbo" />
        </div>
        <div class="ms-container">
            <div class="cards">
                @foreach ($comics as $comic)
                    <div class="comic">
                        <div class="ms-card">
                            <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <h3>{{ $comic['title'] }}</h3>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="button">
        <button>LOAD MORE</button>
    </div>
@endsection
