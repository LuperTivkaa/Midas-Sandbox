<div class="row">
    <div class="col s12">
        @if(count($errors)>0) @foreach ($errors->all() as $error)
        <p class="red-text lighten-3">{{$error}}</p>
        @endforeach @endif
    </div>
    {{-- @if (session('success'))
    <div class="col s12 green">{{session('success')}}</div>
    @endif --}} {{-- @if (session('error'))
    <div class="col s12 red lighten-3">
        {{session('error')}}
    </div>
    @endif --}}
</div>

@if ($flash = session('message'))
<div id='f-message' class="col s12 green accent-3">{{$flash}}</div>
@endif