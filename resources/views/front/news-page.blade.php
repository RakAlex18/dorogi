@extends('template')
@section('content')
    <section id="news" class="container news">
        <div class="row">
            <div class="col-12">
                <h1 class="h2_news">НОВОСТИ
                </h1>
            </div>
            <div class="card mb-12">
                <div class="row no-gutters">
                    @foreach($news as $item)
                        <div class="col-md-4">
                            <img src="{{ asset ('img/news') . '/' . $item->img }}" class="card-img"
                                 alt="{{ $item->alt }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->title }}</h5>
                                <p class="card-text">{{ str_limit($item->content,600) }}</p>
                                <p class="card-text">
                                    <small class="text-muted">Читать далее...</small>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{--{{ $news->links() }}--}}
            </div>
        </div>
    </section>
@endsection
