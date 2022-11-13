@extends('layouts.website')
@section('title', 'amir tardast')

@section('add_styles')

@endsection

@section('content')



    <div class="m-5" id="artists">
        <a href="{{ route('categories.index') }}" style="text-decoration: none">
            <h6 class="text-white fs-4">All Categories</h6>
        </a>
        <div class="row">
            @foreach ($topCategories as $category)
                <div class="col-2 text-center card-item">
                    <a href="{{ route('categories.show', $category->id) }}">
                        <div class="w-100 bg-warning p-3 fs-6 category-detail">{{ $category->title }}
                            ({{ $category->count_song }})
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>

    <br>

    <div class="m-5" id="songs">
        <a href="{{ route('songs.index') }}" style="text-decoration: none">
            <h6 class="text-white fs-4">All Songs</h6>
        </a>
        <div class="row">
            @foreach ($topSongs as $song)
                <div class="col-3 text-center card-item">
                    <a href="{{ route('songs.show', $song->id) }}">
                        <img src="{{ asset('/web/assets/images/' . $song->cover) }}" class="mt-2 m-auto border-radius-5"
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

    <br>

    <div class="m-5" id="artists">
        <a href="{{ route('artists.index') }}" style="text-decoration: none">
            <h6 class="text-white fs-4">All Artists</h6>
        </a>
        <div class="row">
            @foreach ($topArtists as $artist)
                <div class="col-3 text-center card-item">
                    <a href="{{ route('artists.show', $artist->id) }}">
                        <img src="{{ asset('/web/assets/images/' . $artist->image) }}" class="mt-2 m-auto border-radius-5"
                            alt="{{ $artist->nick_name }}" width="100%" height="425px">
                        <div class="w-100 bg-warning p-3 fs-6 card-detail">{{ $artist->nick_name }}</div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>

@endsection

@section('add_scripts')

@endsection
