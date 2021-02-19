@extends("app")

@section("main")
    <div class="d-flex w-100 justify-content-between">
        <h1 class="mb-1">Bristol Vet Practice</h1>
        <p class="mb-1">Alphabetical List of Owners</p>
    </div>
    <br>
    @include("_partials/ownerlist")
@endsection

@section("title")
    {{"Owners - Bristol Vet Practice"}}
@endsection
