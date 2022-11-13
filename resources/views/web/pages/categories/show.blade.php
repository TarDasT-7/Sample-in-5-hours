@extends('layouts.website')
@section('title', 'amir tardast')

@section('add_styles')

@endsection

@section('content')

    <div class="m-5" id="songs">
        <h6 class="text-white fs-4">{{$category->title}}</h6>
        <div class="row">
            @foreach ($songs as $song)
                <div class="col-3 text-center card-item">
                    <a href="{{ route('songs.show', $song->id) }}">
                        <img src="{{ $song->cover_link}}" class="mt-2 m-auto border-radius-5"
                            alt="{{ $song->name }}" width="100%" height="425px">
                        <div class="w-100 bg-warning p-3 fs-6 card-detail">
                            {{ $song->name }}
                            -
                            @if (count($song->artists) == 1)
                                {{ $song->artists[0]->nick_name }}
                            @else
                                @foreach ($song->artists as $key => $artist)
                                    {{ $artist->nick_name }}
                                    @if ($key + 1 < count($song->artists))
                                        ft
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>


@endsection

@section('add_scripts')

@endsection
