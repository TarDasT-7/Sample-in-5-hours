@extends('layouts.website')
@section('title', 'amir tardast')

@section('add_styles')

@endsection

@section('content')


    <div class="m-5" id="songs">

        <div class="row text-center">
            <div class="text-center card-item">
                <a href="{{ route('songs.show', $song->id) }}">
                    <img src="{{ $song->cover_link}}" class="mt-2 m-auto border-radius-5"
                        alt="{{ $song->name }}">
                    <div class="row">

                        <div class="col-12 bg-warning p-3 fs-6 card-detail text-center">
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

                        <div class="col-12 bg-warning card-detail text-center">
                            <audio controls style="width: 90%;">
                                <source src="horse.ogg" type="audio/ogg">
                                <source src="horse.mp3" type="audio/mpeg">
                                Your browser does not support the audio tag.
                            </audio>
                        </div>

                    </div>
                </a>
            </div>
        </div>

        <br><br><br>

        <div class="row">
            <div class="col-2"></div>
            <div class="col-6 text-white">
                {!! $song->text !!}
            </div>
            <div class="col-4">
                @if(count($song->similars) > 0)
                    <a href="{{ route('songs.index') }}" style="text-decoration: none">
                        <h6 class="text-white fs-4">Similars</h6>
                    </a>
                    <div class="row">
                        @foreach ($song->similars as $similar)
                            <div class="col-10 text-center card-item">
                                <a href="{{ route('songs.show', $similar->id) }}">
                                    <img src="{{ asset('/web/assets/images/' . $similar->cover) }}"
                                        class="mt-2 m-auto border-radius-5" alt="{{ $similar->name }}" width="100%"
                                        height="425px">
                                    <div class="w-100 bg-warning p-3 fs-6 card-detail">
                                        {{ $similar->name }}
                                        -
                                        @if (count($similar->artists) == 1)
                                            {{ $similar->artists[0]->nick_name }}
                                        @else
                                            @foreach ($similar->artists as $key => $artist)
                                                {{ $artist->nick_name }}
                                                @if ($key + 1 < count($similar->artists))
                                                    ft
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

    </div>


@endsection

@section('add_scripts')

@endsection
