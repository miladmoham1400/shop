@if(count($errors->all()) > 0)
    <div class="alert alert-danger my-3">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
