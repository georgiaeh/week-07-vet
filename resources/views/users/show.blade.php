@extends("app")

@section("content")
    <div class="d-flex w-100 justify-content-between">
        <h1 class="mb-1">Bristol Vet Practice</h1>
    </div>
    <br>
    <h6> Hello, {{$user->name}} </h6>
    <p> This is where you will be able to see and edit user details</p>
    {{-- <ul class="list-group">   
        <li class ="list-group-item"> {{$owner->email}} </li>
        <li class ="list-group-item"> {{$owner->formattedPhoneNumber()}} </li>
        <li class ="list-group-item"> {{$owner->fullAddress()}} </li>
    </ul> --}}

    {{-- <a href="/owners/{{$owner->id}}/edit" class="btn btn-primary">Edit </a> --}}

@endsection

@section("title")
    {{"User"}}
@endsection