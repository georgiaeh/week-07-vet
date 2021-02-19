@extends("app")

@section("main")
    <div class="d-flex w-100 justify-content-between">
        <h1 class="mb-1">Bristol Vet Practice</h1>
        <p class="mb-1">This is the landing page for the vet app</p>
    </div>
    <br>
    <h1>{{$greeting}}</h1>
    
@endsection

@section("title")
    {{"Bristol Vet Practice"}}
@endsection

