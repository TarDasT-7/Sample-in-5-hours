@extends('layouts.website')
@section('title', 'amir tardast')

@section('add_styles')

@endsection

@section('content')


    <div class="m-5" id="songs">
        <h6 class="text-white fs-4">Categories</h6>
        <div class="row">
            @foreach ($categories as $category)
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

@endsection

@section('add_scripts')

@endsection
