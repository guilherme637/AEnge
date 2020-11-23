@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="list-group">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
