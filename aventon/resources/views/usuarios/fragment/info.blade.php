<!--Esto genera alertas con información. -->

@if(Session::has('info'))

    <div class="alert alert-info">
        <button type="buttom" class="close" data-dismiss="alert">
            &times;
        </button>
        {{ Session::get('info') }}
    </div>

@endif