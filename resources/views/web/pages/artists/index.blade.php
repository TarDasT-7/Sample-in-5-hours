@extends('layouts.website')
@section('title', 'amir tardast')

@section('add_styles')

@endsection

@section('content')


    <div class="m-5" id="artists">
        <h6 class="text-white fs-4">All Artists</h6>
        <div class="row">
            @foreach ($artists as $artist)
                <div class="col-3 text-center card-item">
                    <a href="{{ route('artists.show', $artist->id) }}">
                        <img src="{{ $artist->image_link}}" class="mt-2 m-auto border-radius-5"
                            alt="{{ $artist->nick_name }}" width="100%" height="425px">
                        <div class="w-100 bg-warning p-3 fs-6 card-detail">{{ $artist->nick_name }}</div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>

    <br>

@endsection

@section('add_scripts')

@endsection
