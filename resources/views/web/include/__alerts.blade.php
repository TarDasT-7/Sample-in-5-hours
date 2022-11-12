

@if ($errors->any())
    <div class="alert alert-danger showAlert">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="my-2">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
