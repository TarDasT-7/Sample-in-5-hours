@extends('layouts.website')
@section('title', 'amir tardast')

@section('add_styles')

@endsection

@section('content')


    <div class="m-5" id="songs">

        <div class="row text-center">
            <div class="text-center card-item">
                <a href="{{ route('songs.show', $artist->id) }}">
                    <div class="col-12 text-center card-item">
                        <a href="{{ route('artists.show', $artist->id) }}">
                            <img src="{{ $artist->image_link}}" class="mt-2 m-auto border-radius-5"
                                alt="{{ $artist->nick_name }}" width="50%">
                            <div class="w-100 bg-warning p-3 fs-6 card-detail">{{ $artist->nick_name }}</div>
                        </a>
                    </div>
                </a>
            </div>
        </div>

        <br><br><br>


        <div class="m-5" id="songs">

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

    </div>


@endsection

@section('add_scripts')

@endsection
