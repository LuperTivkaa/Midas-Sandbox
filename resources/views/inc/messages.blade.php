<div class="row">
    <div class="container">
        @if(count($errors)>0) @foreach ($errors->all() as $error)
        <div class="col s12 red lighten-3 section">
            {{$error}}
        </div>
        @endforeach @endif {{-- @if (session('success'))
        <div class="col s12 green">{{session('success')}}</div>
        @endif --}} @if (session('error'))
        <div class="col s12 red lighten-3">
            {{session('error')}}
        </div>
        @endif
    </div>
</div>



@if ($flash = session('message'))
<div id='f-message' class="col s12 green accent-3">{{$flash}}</div>
@endif