@extends('layouts.main')

@section('page-content')
    <div class="content">
        <div class="jumbo">
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbo" />
        </div>
        <div class="ms-container">
            <div class="cards">
                @foreach ($comics as $comic)
                    <div class="col-md-4">
                        <div class="ms-card">
                            <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <h4>{{ $comic['title'] }}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="button">
        <button>LOAD MORE</button>
    </div>
@endsection
