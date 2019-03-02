@extends('template');

@section('last_news')
    <section id="news" class="container news">
        <div class="row">
            <div class="col-12">
                <h2 class="h2_news">ПОСЛЕДНИЕ НОВОСТИ
                </h2>
            </div>
            @foreach($last_news as $last_new)
            <div class="col-md-4">

                <div class="card-body text-center">
                    <a href="#">
                        <h3 class="card-title"> {{ $last_new->title }} </h3>
                    </a>
                    <p class="card-text">{{ $last_new->content }}</p>
                    <div class="card-link">Источник:
                        <a href="{{ $last_new->link_content }}"
                           target="_blank">{{ $last_new->author->name_author }}</a>
                    </div>
                    <span>{{ $last_new->created_at }}</span>
                </div>
            </div>
                @endforeach
        </div>
    </section>
@endsection
