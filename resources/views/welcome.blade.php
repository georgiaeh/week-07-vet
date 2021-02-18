@extends("app")

@section("welcome")
    <div class="d-flex w-100 justify-content-between">
        <h1 class="mb-1">Bristol Vet Practice</h1>
        <p class="mb-1">This is the landing page for the vet app</p>
    </div>
    <br>
    @include("_partials/ownerlist")
@endsection

@section("title")
    {{"Bristol Vet Practice"}}
@endsection

