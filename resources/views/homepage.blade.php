@extends('layouts.main')

@section('page-content')
    <main>
        <div class="content">
            <div class="jumbo">
                <img src="../assets/jumbotron.jpg" alt="jumbo" />
            </div>
            <div class="container">
                <AppButton />
                <div class="cards" v-for="comic in comics">
                    <AppCard :imgSrc="comic.thumb" :text="comic.series" />
                </div>
            </div>
        </div>
        <div class="button">
            <button>LOAD MORE</button>
        </div>
    </main>
@endsection
