@extends("app")

@section("content")
    <div class="d-flex w-100 justify-content-between">
        <h1 class="mb-1">Bristol Vet Practice</h1>
    </div>
    <br>
    {{-- <div class="container-md">
        <h5> Search Animal Records </h5>
        <form class="form-inline" method="get" action="/owners/search">
            <input class="form-control mr-sm-2" type="search" id="search" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div> --}}
    @include("_partials/animallist")
@endsection

@section("title")
    {{"Animals - Bristol Vet Practice"}}
@endsection
