@extends("app")

@section("main")
    <div class="d-flex w-100 justify-content-between">
        <h1 class="mb-1">Bristol Vet Practice</h1>
    </div>
    <br>
    <h6> {{$owner->fullName()}} </h6>
    <ul class="list-group">   
        <li class ="list-group-item"> {{$owner->email}} </li>
        <li class ="list-group-item"> {{$owner->formattedPhoneNumber()}} </li>
        <li class ="list-group-item"> {{$owner->fullAddress()}} </li>
    </ul>

    <a href="/owners/{{$owner->id}}/edit" class="btn btn-primary">Edit </a>

@endsection

@section("title")
    {{"Bristol Vet Practice"}}
@endsection
