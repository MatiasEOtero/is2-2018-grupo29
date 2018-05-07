@if(count($errors))

    <div class="alert alert-danger">
        <button type="buttom" class="close" data-dismiss="alert">
            &times;
        </button>
        <ul>
           @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
           @endforeach
        </ul>
    </div>

@endif